<?php
include "onenet.configuration.php";

include "getDataFromDeviceGET.php";

include "db.php";



foreach ($oneNetConfiguration as $key => $value) {

    if($value['clientId'] != 9) {
      $response = getDataFromDeviceGET($value['clientId'], $value['fotoWoltalika']['adresUrzadzenia']);

      $idDevice = $value['ppe']['adresUrzadzenia'];
      $idClient = $value['clientId'];
      $last_voltage_l1 = $response['last_voltage_L1'];
      $last_voltage_l2 = $response['last_voltage_L2'];
      $last_voltage_l3 = $response['last_voltage_L3'];
      $last_power_value = $response['last_power_value'];
      $last_power_set_active = $response['last_power_set_active'];
      $last_frequency = $response['last_frequency_value'];
      $energy_data = $response['energy_data_value'];



      try {
      $sql = "INSERT INTO `OneNet`.`OneNet_measurements`
      (`idDevice`, `idClient`, `last_voltage_l1`, `last_voltage_l2`, `last_voltage_l3`, `last_power_value`, `last_power_set_active`, `last_frequency`, `energy_data`)
      VALUES ('$idDevice', $idClient, $last_voltage_l1, $last_voltage_l2, $last_voltage_l3, $last_power_value, '$last_power_set_active', $last_frequency, $energy_data);";
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


