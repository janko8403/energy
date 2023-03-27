<?php
include "../../php/db.php";

include "../../pages/OneNet/onenet.configuration.php";

/**
 * zmiana trybu pracy pompy ciepła
 * zapisywanie do bazy danych ustawionego trybu pracy na danej pompie ciepła, z oznaczeniem timestampem
 */

if(isset($_POST['deviceAddress'])) {
   $deviceAddress = $_POST['deviceAddress'];
} else {
   $deviceAddress = 'https://onenet.advant.pl';
}

if(isset($_POST['clientId'])) {
   $clientId = $_POST['clientId'];
} else {
   $clientId = 1; // domyślnie -1
}

if(isset($_POST['pcModeToSet'])) {
   $pcModeToSet = $_POST['pcModeToSet'];
} else {
   $pcModeToSet = 4;
}

pcModeToSet($deviceAddress, $clientId, $pcModeToSet, $dbh);

function pcModeToSet( $deviceAddress, $clientId, $pcModeToSet, $dbh) {

   $device = $deviceAddress;
   $deviceAddress = $deviceAddress . '/api/';

   $url = "https://onenet.advant.pl/api/login/";

   $curl = curl_init($deviceAddress.'login');

   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_POST, true);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

   $headers = array(
      "Content-Type: application/json",
   );
   curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

   $data =    '{
   "username":"admin",
   "password":"Api1cd3l"
   }';

   curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

   $resp = curl_exec($curl);

   curl_close($curl);

   $respoToken = json_decode($resp);

   $token = $respoToken->{'token'};


   $response = [];
   $tmpArray = [];
   $response['clientId'] = $clientId;
   $response['device'] = $device;


   $gRes = setPCMode($clientId, $deviceAddress."set_sg_ready_mode/",$token, $pcModeToSet);

//zmienić na OneNet_pv_mode
   try {
      $sql = "INSERT INTO `OneNet`.`OneNet_pc_mode` (`deviceId`, `clientId`, `mode`) VALUES ('$device', '$clientId', '$pcModeToSet');";
      $query = $dbh->prepare($sql);
      $query->execute();
      $sql = "SELECT * FROM OneNet.OneNet_pc_mode
               WHERE
                  deviceId = '$device'
               AND
                  clientId = '$clientId'
               AND mode = '$pcModeToSet'";
      $query = $dbh->prepare($sql);
      $query->execute();

      $res = [];
      // $status= 'Brak wpisu';
      // $res = ['status'] = $status;
      // var_dump($row);
      while($row = $query->fetch() ) :
         $res['idOneNet_pc_mode']     = $row['idOneNet_pc_mode'];
         $res['deviceId']             = $row['deviceId'];
         $res['clientId']             = $row['clientId'];
         $res['mode']                 = $row['mode'];
         $res['timestamp']            = $row['timestamp'];
         $res['status']               = 'OK';
      endwhile;
   } catch (\PDOException $th) {
      throw $th;
      var_dump($th);
   }


// LOGER
   // $log = 'set_sg_ready_mode set value ' .$pcModeToSet . ' Response: ' . $gRes;

   $log = '{
    "result": '.$gRes['status'].',
    "description": "Response: ' . $gRes.'",
    "message": "set_sg_ready_mode set value ' .$pcModeToSet .' on device '. $device .' / client '.$clientId.' "
   }';

   try {
      $sql = "INSERT INTO `OneNet`.`OneNet_log` (`loginuser_id`, `deviceId`, `clientId`, `log`)
               VALUES ('1', '$device', '$clientId', '$log');";
      $query = $dbh->prepare($sql);
      $query->execute();
   } catch (\PDOException $th) {
      throw $th;
      var_dump($th);
   }


   echo json_encode($res, JSON_UNESCAPED_UNICODE);
   return json_encode($res, JSON_UNESCAPED_UNICODE);;
}


function setPCMode($clientId, $url, $token, $pcModeToSet) {
   $curl = curl_init();


   // echo '<br> URL <br>';
   // echo '<br>'.$url.'?value='.$pcModeToSet.'<br>';
   curl_setopt_array($curl, array(
      CURLOPT_URL => $url.'?value='.$pcModeToSet,
      // CURLOPT_URL => $url,
      // CURLOPT_POSTFIELDS => $data,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HEADER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_HTTPHEADER => array(
      "Authorization: Token ". $token
      ),
   ));

   $response = curl_exec($curl);

   if (curl_errno($curl)) {

      print curl_error($curl);

   }

   $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
   $header = substr($response, 0, $header_size);
   $body = substr($response, $header_size);

   /**
    * DEBUG
    */
   // echo '<br> header size <br>';
   // var_dump($header_size);
   // echo '<br> header <br>';
   // var_dump($header);
   // echo '<br> body <br>';
   // var_dump($body);

   $x = explode(" ", $header);

   // echo '<br> header <br>';

   // var_dump($x[1]);
   //    echo '<br>  <br>';
   //    var_dump($response);
   //          echo '<br>  <br>';

   $curlResp = [];
   if($x[1] == '200') {
      $resp = true;
   } else {
      $resp = false;
   }

   $curlResp['responseCode'] = $x[1];
   $curlResp['status'] = $resp;

   /**
    * DEBUG
    */

   // $res = json_encode($curlResp, true);

   // var_dump(json_encode($curlResp, true));

   return json_encode($curlResp, true);

}