<?php
include "onenet.configuration.php";

include "getDataFromDeviceGET.php";

include "db.php";



foreach ($oneNetConfiguration as $key => $value) {

    if($value['clientId'] != 99) {

       //timestamp zapytania do urządzenia
      $requested_timestamp = date("Y-m-d H:i:s");

      $response = getDataFromDeviceGET($value['clientId'], $value['fotoWoltalika']['adresUrzadzenia']);


      // var_dump($response); //debug

      $idDevice = $value['fotoWoltalika']['adresUrzadzenia'];
      $idClient = $value['clientId'];
      // $last_voltage_l1 = $response['last_voltage_L1'];
      // $last_voltage_l2 = $response['last_voltage_L2'];
      // $last_voltage_l3 = $response['last_voltage_L3'];
      $last_voltage_l1 = 0;
      $last_voltage_l2 = 0;
      $last_voltage_l3 = 0;
      if(array_key_exists('last_voltage_L1', $response)) {
        $last_voltage_l1 = $response['last_voltage_L1'];
      }
      if(array_key_exists('tag_L1', $response)) {
        $last_voltage_l1 = $response['tag_L1'];
      }
      if(array_key_exists('last_voltage_L2', $response)) {
        $last_voltage_L2 = $response['last_voltage_L2'];
      }
      if(array_key_exists('tag_L2', $response)) {
        $last_voltage_l2 = $response['tag_L2'];
      }
      if(array_key_exists('last_voltage_L3', $response)) {
        $last_voltage_L3 = $response['last_voltage_L3'];
      }
      if(array_key_exists('tag_L3', $response)) {
        $last_voltage_l3 = $response['tag_L3'];
      }


      // $last_power_value = $response['last_power_value'];
      $last_power_value = 0;
      if(array_key_exists('last_power_value', $response)) {
        $last_power_value = $response['last_power_value'];
      }
      if(array_key_exists('e_value', $response)) {
        $last_power_value = $response['e_value'];
      }


      // if($last_power_value == 0 ) { //debug
      //   $last_power_value = mt_rand() / mt_getrandmax() * 10;
      // }


      $last_power_set_active = $response['last_power_set_active'];

      // $last_frequency = $response['last_frequency_value'];
      $last_frequency = 0;
      if(array_key_exists('last_frequency_value', $response)) {
        $last_frequency = $response['last_frequency_value'];
      }
      if(array_key_exists('quenc_value', $response)) {
        $last_frequency = $response['quenc_value'];
      }
      // $energy_data = $response['energy_data_value'];
      $energy_data = 0;
      if(array_key_exists('energy_data_value', $response)) {
        $energy_data = $response['energy_data_value'];
      }
      if(array_key_exists('at_value', $response)) {
        $energy_data = $response['at_value'];
      }



      try {
      $sql = "INSERT INTO `OneNet`.`OneNet_measurements`
      (`idDevice`, `idClient`, `last_voltage_l1`, `last_voltage_l2`, `last_voltage_l3`, `last_power_value`, `last_power_set_active`, `last_frequency`, `energy_data`, `requested_timestamp`)
      VALUES ('$idDevice', $idClient, $last_voltage_l1, $last_voltage_l2, $last_voltage_l3, $last_power_value, '$last_power_set_active', $last_frequency, $energy_data, '$requested_timestamp');";
      $query = $dbh->prepare($sql);
      $query->execute();
      } catch (\PDOException $th) {
          throw $th;
          var_dump($th);
      }

    }

}
echo 'OK\n';
print_r('OK\n');


