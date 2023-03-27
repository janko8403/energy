<?php

if(isset($_GET['deviceAddress'])) {
   $deviceAddress = $_GET['deviceAddress'];
} else {
   // $deviceAddress = 'https://onenet.advant.pl';
   $deviceAddress = 'https://enspirion.pl';
}
// getDataFromDeviceGET(5, $deviceAddress);//debug
//  echo ' getDataFromDeviceGet <br>';//debug
function getDataFromDeviceGET($clientId, $deviceAddress) {

   $device = $deviceAddress;
   // $deviceAddress = $deviceAddress . '/api/';
   $deviceAddress = $deviceAddress . '/';





// $url = "https://onenet.advant.pl/api/login/"; //api ze swaggera

// $url = "http://91.232.48.210/api/login/"; // adres fizycznego urządzenia

$url = $deviceAddress . 'login';

// echo 'curl <br>'.$deviceAddress.'login'. '<br>';


// echo 'curl <br>'.$url. '<br>';
$curl = curl_init($deviceAddress.'login');
// $curl = curl_init($url);
// curl_setopt($curl, CURLOPT_URL, $deviceAddress.'login');
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// $data = <<<DATA
// {
//   "username":"admin",
//   "password":"Api1cd3l"

// }
// DATA;

$data = <<<DATA
{
  "email":"enspirion",
  "password":"fds543fs"
}
DATA;


curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);

curl_close($curl);
// echo 'odpowiedź z curl => <br>';
// var_dump($resp);
$respoToken = json_decode($resp);

// echo '<br><br> token => '. $respoToken->{'token'}.'<br>';
// echo '<br><br> access_token => '. $respoToken->{'access_token'}.'<br>';

// $token = $respoToken->{'token'};
$token = $respoToken->{'access_token'};


$response = [];
$tmpArray = [];
$response['clientId'] = $clientId;
$response['device'] = $device;



// $gRes = getDataFromDevice($clientId, $deviceAddress."last_voltage/",$token);
$gRes = getDataFromDevice($clientId, $deviceAddress."last_voltage",$token, "last_voltage");
$tmpArray = array_merge($gRes, $tmpArray);
// $gRes = getDataFromDevice($clientId, $deviceAddress."last_power/",$token);
$gRes = getDataFromDevice($clientId, $deviceAddress."last_power",$token, "last_power");
$tmpArray = array_merge($gRes, $tmpArray);
// $gRes = getDataFromDevice($clientId, $deviceAddress."last_frequency/",$token);
$gRes = getDataFromDevice($clientId, $deviceAddress."last_frequency",$token, "last_frequency");
$tmpArray = array_merge($gRes, $tmpArray);
// $gRes = getDataFromDevice($clientId, $deviceAddress."energy_data/",$token);
$gRes = getDataFromDevice($clientId, $deviceAddress."energy_data",$token,"energy_data");
$tmpArray = array_merge($gRes, $tmpArray);

$gRes = $tmpArray;
   // echo ' <br>%%%%%%%%%%%%%%%%%%%%%%%%%%%<br> ';//debug
   //    foreach ($gRes as $key => $value) {
   //       # code...

   //       echo '<br><br>key => <br>';
   //       var_dump($key);
   //       echo '<br>value => <br>';
   //       var_dump($value);
   //       echo '<br><br>';

   //    }
   // echo ' <br>%%%%%%%%%%%%%%%%%%%%%%%%%%%<br> ';



// echo '<br><br><br> $$$$$$$$$$$$$$$$$$$$$$$$ <br><br><br>';//debug
// var_dump($gRes);

return $gRes;
}


function getDataFromDevice($clientId, $url, $token, $leaf) {


//    echo 'header <br>';
// // echo "Authorization: Bearer ". $token;
// echo $url;
// echo '****<br> <br>';

   $curl = curl_init();

   curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
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
   $data = json_decode($response, true);

   $resName = substr($url, 29);

   $resName= substr_replace($resName ,"",-1);


   $resName = $clientId;

   $res = [];
   $res[$resName] = [];
   foreach ($data as $key => $value) {


      // $resName = substr($url, 29);


      // $resName= substr_replace($resName ,"",-1);

         $resName = $leaf;


      $resName = $resName.'_'.$key;

      $res[$resName] = $value;


   }


   return $res;

}

// getDataFromDeviceGET(1, 'http://91.232.48.210');
// getDataFromDeviceGET(1, 'https://onenet.advant.pl');
