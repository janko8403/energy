<?php
include "../../php/db.php";
include "../../pages/OneNet/onenet.configuration.php";


if(isset($_GET['idClient'])) {
    $idClient = $_GET['idClient'];
} else {
    $idClient = 4;
}

    /**
     * OLD *-==========================================
     */
    try {

    /**pobranie ostatniej godziny na danym urządzeniu, przed godziną wyświetlania
     * jako startowa wartość dla zaślepki
     */

    $tmpHourArray = [];
    $tmpTimestampsArray = [];
    $tmpValueArray = [];
    $timestamp = strtotime(date('Y-m-d H:i:s'));
    for($t = 60; $t >0; $t--) {


            $time = ' - ' . $t . ' minutes';

            $timestamp = date('Y-m-d H:i:00',strtotime($time));

            $tmpArray = [
                $timestamp => 0
            ];


            $tmpHourArray[$timestamp] = 0;

    }


    // echo '<br><br>tmpHourArray pusty ';
    // echo '<br>';
    // var_dump($tmpHourArray);
    // echo '<br>';
    // echo '<br>';






    $sql = "SELECT idOneNet_measurements, idDevice, idClient, last_power_value, timestamp
        FROM OneNet.OneNet_measurements
        where idClient = '$idClient' and
        timestamp > now() - interval 1 hour
        group by timestamp
        order by timestamp asc;";
        // $tmpHourArray = [];


		$query = $dbh->prepare($sql);
		$query->execute();

        $selectFromDB = new stdClass(); // obiekt na który zrzucimy dane

        $selectedValues = [];

        //zwracana wartość
        $res = [];

        $resPerClient = [];

        while($row = $query->fetch() ) :

            $tmpArray = [];
            $id = $row['idOneNet_measurements'];
            $idDevice = $row['idDevice'];
            $idClient = $row['idClient'];
            $last_power_value = $row['last_power_value'];

            $timestamp = strtotime($row['timestamp']);
            $timestamp = date('Y-m-d H:i:00',$timestamp);

            if($row['last_power_value'] != 0 || $row['last_power_value'] != null) {

                echo '<br><br> ';
                echo 'PRZED  => '; var_dump($tmpHourArray[$timestamp]) ;
                echo '<br>TIMESTAMP =>'; var_dump($timestamp);
                $tmpHourArray[$timestamp] = $row['last_power_value'];
                 echo ' PO => ';var_dump($tmpHourArray[$timestamp]);
                echo '<br><br> ';
            }





            $tmpArray['id']                 = $id;
            $tmpArray['idDevice']           = $idDevice;
            $tmpArray['idClient']           = $idClient;
            $tmpArray['clientName']         = $oneNetConfiguration[$idClient]['nazwaOdbiorcy'];
            $tmpArray['last_power_value']   = $last_power_value;
            $tmpArray['timestamp']          = $timestamp;




            array_push($selectedValues, $tmpArray);


            $resPerClient[$idClient] = $selectedValues;





        endwhile;
                    array_push($selectedValues, $tmpHourArray);
        $res[$idClient] = $selectedValues;





        echo json_encode($res, JSON_UNESCAPED_UNICODE);

    //         echo '<br<br>tmpHourArray wynikowy';
    // echo '<br>';
    // var_dump($tmpHourArray);
    // echo '<br>';
    // echo '<br>';
        // echo json_encode($tmpHourArray, JSON_UNESCAPED_UNICODE);


        return json_encode($res, JSON_UNESCAPED_UNICODE);

    } catch (\PDOException $th) {
        throw $th;
        var_dump($th);
            $selectFromDB = new stdClass();

            $selectFromDB->result      = 'ERROR';
            $selectFromDB->message     = $e->getMessage();

            return json_encode($selectFromDB, JSON_UNESCAPED_UNICODE);

            die();
    }


