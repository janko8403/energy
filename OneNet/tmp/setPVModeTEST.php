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

if(isset($_POST['pvValueToSet'])) {
   $pvValueToSet = $_POST['pvValueToSet'];
} else {
   $pvValueToSet = 0;
}

pvModeToSet($deviceAddress, $clientId, $pvValueToSet, $dbh);

function pvModeToSet( $deviceAddress, $clientId, $pvValueToSet, $dbh) {

   $device = $deviceAddress;
   $deviceAddress = $deviceAddress . '/api/';

   // echo 'deviceAddress => '.$deviceAddress.'<br><br>';
   // echo 'clientId => '.$clientId.'<br><br>';

   $url = "https://onenet.advant.pl/api/login/";

   $curl = curl_init($deviceAddress.'login');
   // $curl = curl_init($url);
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_POST, true);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

   $headers = array(
      "Content-Type: application/json",
   );
   curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

   // $data = <<<DATA
   // {
   // "username":"admin",
   // "password":"Api1cd3l"
   // }
   // DATA;

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


   $gRes = setPVMode($clientId, $deviceAddress."set_active_power/",$token, $pvValueToSet);


   $log = '{
    "result": '.$gRes['status'].',
    "description": "Response: ' . $gRes.'",
    "message": "set_active_power set value ' .$pvValueToSet .'"
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


   echo json_encode($gRes, JSON_UNESCAPED_UNICODE);
   return json_encode($gRes, JSON_UNESCAPED_UNICODE);;
}


function setPVMode($clientId, $url, $token, $pvValueToSet) {
   $curl = curl_init();


   // echo '<br> URL <br>';
   // echo '<br>'.$url.'?value='.$pcModeToSet.'<br>';
   curl_setopt_array($curl, array(
      CURLOPT_URL => $url.'?value='.$pvValueToSet,
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