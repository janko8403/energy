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
   // $deviceAddress = 'https://onenet.advant.pl';
         // $deviceAddress = 'http://31.0.222.235'; // dziala
      $deviceAddress = 'http://31.0.221.236'; // dziala
      // $deviceAddress = 'https://31.0.220.215';
         // $deviceAddress = 'https://31.0.220.17';
         // $deviceAddress = 'https://31.0.219.2';
}

if(isset($_POST['clientId'])) {
   $clientId = $_POST['clientId'];
} else {
   $clientId = 6; // domyślnie -1
}

if(isset($_POST['pvValueToSet'])) {
   $pvValueToSet = $_POST['pvValueToSet'];
} else {
   $pvValueToSet = 100;
}

pvModeToSet($deviceAddress, $clientId, $pvValueToSet, $dbh);

function pvModeToSet( $deviceAddress, $clientId, $pvValueToSet, $dbh) {

   $device = $deviceAddress;
   // $deviceAddress = $deviceAddress . '/api/';
   $deviceAddress = $deviceAddress . '/';

   // echo 'deviceAddress => '.$deviceAddress.'<br><br>';
   // echo 'clientId => '.$clientId.'<br><br>';

   // $url = "https://onenet.advant.pl/api/login/";
   $url = $deviceAddress . 'login';

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

   // $data =    '{
   // "username":"admin",
   // "password":"Api1cd3l"
   // }';
   // $data = <<<DATA
   // {
   // "email":"enspirion",
   // "password":"fds543fs"
   // }
   // DATA;

   $data = '{
   "email":"enspirion",
   "password":"fds543fs"
   }';




   curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

   $resp = curl_exec($curl);

   curl_close($curl);

   $respoToken = json_decode($resp);

   // $token = $respoToken->{'token'};
   $token = $respoToken->{'access_token'};

   // echo 'token => ';//debug
   // var_dump($token);//debug
   // echo '<br>';     //debug


   $response = [];
   $tmpArray = [];
   $response['clientId'] = $clientId;
   $response['device'] = $device;


   // $gRes = setPVMode($clientId, $deviceAddress."set_active_power/",$token, $pvValueToSet);
   // $gRes = setPVMode($clientId, $deviceAddress."/set_active_power",$token, $pvValueToSet);
   $gRes = setPVMode($clientId, $deviceAddress."/set_active",$token, $pvValueToSet);


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
   // echo '<br>'.$url.'?value='.$pvValueToSet.'<br>';


   curl_setopt_array($curl, array(
      CURLOPT_URL => $url.'?value='.$pvValueToSet,
      // CURLOPT_URL => $url,
      // CURLOPT_POSTFIELDS => $data,
      //   CURLOPT_POSTFIELDS => array('value' => '50'),
        CURLOPT_POSTFIELDS => array('value' => $pvValueToSet),
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
      // CURLOPT_HTTPHEADER => array(
      // "Authorization: Token ". $token
      // ),
      CURLOPT_HTTPHEADER => array(
         "Authorization: Bearer ". $token
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