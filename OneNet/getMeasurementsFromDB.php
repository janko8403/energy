<?php
include "../../php/db.php";
include "../../pages/OneNet/onenet.configuration.php";


if(isset($_GET['idClient'])) {
    $idClient = $_GET['idClient'];
} else {
    $idClient = -1;
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



        /**
         * budowa zaślepki dla poszczególnych układów
         */
            $time = ' - ' . $t . ' minutes';

            $timestamp = date('Y-m-d H:i:00',strtotime($time));

            $tmpArray = [
                $timestamp => 0
            ];

            $tmpHourArray[$timestamp] = 0;


            /**
             * budowa zaślepki dla sumy
             */

            $time9 = ' - ' . $t . ' minutes';

            // $timestamp9 = date('Y-m-d H:i:00',strtotime($time9));

            $tmpArray9 = [
                $timestamp9 => '0'
            ];

            // $tmpHourArray9[$timestamp9] = 0;
            $tmpHourArray9[$timestamp] = '0';

    }





    // $sql = "SELECT idOneNet_measurements, idDevice, idClient, last_power_value, timestamp
    //     FROM OneNet.OneNet_measurements
    //     where idClient = '$idClient' and
    //     timestamp > now() - interval 1 hour
    //     group by timestamp
    //     order by timestamp asc;";

    $sql = "SELECT idOneNet_measurements, idDevice, idClient, last_power_value, timestamp, requested_timestamp
        FROM OneNet.OneNet_measurements
        where idClient = '$idClient' and
        requested_timestamp > now() - interval 1 hour
        group by requested_timestamp
        order by requested_timestamp asc
        limit 60;";
        // $tmpHourArray = [];


		$query = $dbh->prepare($sql);
		$query->execute();

        $selectFromDB = new stdClass(); // obiekt na który zrzucimy dane

        $selectedValues = [];
        $timestampsArray = [];
        $valuesArray = [];

        //zwracana wartość
        $res = [];

        $resPerClient = [];

        $lastTimestamp = '';

        while($row = $query->fetch() ) :

            $tmpArray = [];
            $id = $row['idOneNet_measurements'];
            $idDevice = $row['idDevice'];
            $idClient = $row['idClient'];
            $last_power_value = $row['last_power_value'];

            $timestamp = strtotime($row['timestamp']);
            $timestamp = date('Y-m-d H:i:00',$timestamp);



            // $requested_timestamp = strtotime($row['requested_timestamp']);


                    $requested_timestamp = $row['requested_timestamp'];
                    $requested_timestamp = strtotime($row['requested_timestamp']);
                    $timestamp = date('Y-m-d H:i:00',$requested_timestamp);

                    $lastTimestamp = $timestamp;

            if($row['last_power_value'] != -3 || $row['last_power_value'] != null ) {
                $tmpHourArray[$timestamp] = $row['last_power_value'];

            }

            // if($row['last_power_value'] == 0 ) { //debug
            //     $tmpHourArray[$timestamp] = rand(0,10);
            //     $tmpHourArray[$timestamp] = mt_rand() / mt_getrandmax() * 10;

            // }




            $tmpArray['id']                 = $id;
            $tmpArray['idDevice']           = $idDevice;
            $tmpArray['idClient']           = $idClient;
            $tmpArray['clientName']         = $oneNetConfiguration[$idClient]['nazwaOdbiorcy'];
            $tmpArray['last_power_value']   = $last_power_value;
            $tmpArray['timestamp']          = $timestamp;
            $tmpArray['requested_timestamp']= $timestamp;


            array_push($selectedValues, $tmpArray);
            $resPerClient[$idClient] = $selectedValues;

        endwhile;
        // array_push($selectedValues, $tmpHourArray);
        $res[$idClient] = $selectedValues;

        //timestamp => wartość

        $tmpHourArray = array_slice($tmpHourArray, 0 , 60, true);
        $res['hourValues'] = $tmpHourArray;

        //tablica timeastampów
        foreach ($tmpHourArray as $key => $value) {
            # code...
            array_push($timestampsArray, $key);
        }


        $timestampsArray = array_slice($timestampsArray, 0 , 60, true);

        if(count($timestampsArray) < 60) {

            array_push($timestampsArray, $lastTimestamp);
        }
        $res['timestampsArray'] = $timestampsArray;

        //tablica wartości

        //check if $tmpHourArray is shorter that 60 and if yes, then add at the end value



        foreach ($tmpHourArray as $key => $value) {
            # code...
            array_push($valuesArray, $value);
        }
        $timestampsArray = array_slice($timestampsArray, 0 , 60, true);

        if(count($timestampsArray) > 60) {

            array_shift($timestampsArray, 0);
        }
        if(count($timestampsArray) < 60) {

            array_push($timestampsArray, 0);
        }

        if(count($valuesArray) > 60) {

            array_shift($valuesArray, 0);
        }
        if(count($valuesArray) < 60) {

            array_push($valuesArray, 0);
        }


        $res['valuesArray'] = $valuesArray;

        $res['idDevice']           = $idDevice;
        $res['idClient']           = $idClient;
        $res['clientName'] = $oneNetConfiguration[$idClient]['nazwaOdbiorcy'];




        /**
         * dodawanie do zwrotki SUMY START
         */

        $res9 = [];
        $selectedValues9 = [];
        // $sql9 = "SELECT * FROM (SELECT idOneNet_measurements, idDevice, 9 as idClient, last_power_value, timestamp, sum(last_power_value) as lpv, requested_timestamp
        // FROM OneNet.OneNet_measurements
        //         WHERE #idClient = 8 and
        //         requested_timestamp > now() - interval 1 hour

        //         GROUP BY DATE_FORMAT(`timestamp`, '%H:%i')
        //         ORDER BY timestamp ASC) as t
        //         ";

        $sql9 = "SELECT * FROM (SELECT idOneNet_measurements, idDevice, 20 as idClient, last_power_value, timestamp, sum(last_power_value) as lpv, requested_timestamp
        FROM OneNet.OneNet_measurements
                WHERE #idClient = 8 and
                requested_timestamp > now() - interval 1 hour

                GROUP BY DATE_FORMAT(`requested_timestamp`, '%H:%i')
                ORDER BY requested_timestamp ASC) as t
                limit 60
                ";

                $query9 = $dbh->prepare($sql9);
                $query9->execute();
                while($row = $query9->fetch() ) :
                    $tmpArray9 = [];
                    $id = $row['idOneNet_measurements'];
                    // $idDevice = "$row['idDevice']";
                    // $idClient = $row['idClient'];
                    $lpv = $row['last_power_value'];
                    $last_power_value = $row['lpv'];
                    $timestamp = strtotime($row['timestamp']);
                    $timestamp = date('Y-m-d H:i:00',$timestamp);

                    $requested_timestamp = $row['requested_timestamp'];
                    $requested_timestamp = strtotime($row['requested_timestamp']);
                    $timestamp = date('Y-m-d H:i:00',$requested_timestamp);

                    $tmpArray9['id']                 = $id;
                    $tmpArray9['idDevice']           = "https://enspirion.pl";
                    $tmpArray9['idClient']           = 20;
                    $tmpArray9['clientName']         = 'SUMA';
                    $tmpArray9['last_power_value']   = $row['lpv'];
                    $tmpArray9['timestamp']          = $timestamp;
                    $tmpArray9['requested_timestamp']          = $timestamp;

                    array_push($selectedValues9, $tmpArray9);
                    // var_dump($tmpArray);
                endwhile;
            // $res9 = $selectedValues9;

        $selectedValues9 = array_slice($selectedValues9, 0 , 60, true);
        $res['suma'] = $selectedValues9;
         /**
          * dodawanie do zwrotki SUMY END
          */


        echo json_encode($res, JSON_UNESCAPED_UNICODE);

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


