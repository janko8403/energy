<?php
include "../../php/db.php";
include "../../pages/OneNet/onenet.configuration.php";

 $idClient = 9;
    /**
     * OLD *-==========================================
     */
    try {
        $selectFromDB = new stdClass(); // obiekt na który zrzucimy dane

        $selectedValues = [];

        //zwracana wartość
        $res = [];

        $resPerClient = [];

        // $res[$idClient] = $selectedValues;

        /**
         * SUMA z punktów pomiarowych
         */


            $sql = "SELECT * FROM (SELECT idOneNet_measurements, idDevice, 9 as idClient, last_power_value, timestamp, sum(last_power_value) as lpv FROM OneNet.OneNet_measurements
                WHERE #idClient = 8 and
                timestamp > now() - interval 1 hour

                GROUP BY DATE_FORMAT(`timestamp`, '%H:%i')
                ORDER BY timestamp ASC) as t
                ";

                $query = $dbh->prepare($sql);
                $query->execute();
                while($row = $query->fetch() ) :
                    $tmpArray = [];
                    $id = $row['idOneNet_measurements'];
                    $idDevice = $row['idDevice'];
                    $idClient = $row['idClient'];
                    $lpv = $row['last_power_value'];
                    $last_power_value = $row['lpv'];
                    // $timestamp = $row['timestamp'];
                    $timestamp = strtotime($row['timestamp']);
                    $timestamp = date('Y-m-d H:i:00',$timestamp);

                    $tmpArray['id']                 = $id;
                    $tmpArray['idDevice']           = $idDevice;
                    $tmpArray['idClient']           = $idClient;
                    // $tmpArray['clientName']         = $oneNetConfiguration[$idClient]['nazwaOdbiorcy'];
                    $tmpArray['clientName']         = 'SUMA';
                    $tmpArray['last_power_value']   = $last_power_value;
                    $tmpArray['timestamp']          = $timestamp;

                    array_push($selectedValues, $tmpArray);
                    // var_dump($tmpArray);
                endwhile;
            $res[9] = $selectedValues;
// var_dump($res);




        echo json_encode($res, JSON_UNESCAPED_UNICODE);
// var_dump($res);
        // echo '<br><br>@@@@@@@@@@@@@@@@@@@@@@@@@@<br><br>';
                // echo json_encode($resPerClient, JSON_UNESCAPED_UNICODE);
        // echo '<br><br>@@@@@@@@@@@@@@@@@@@@@@@@@@<br><br>';
        return json_encode($res, JSON_UNESCAPED_UNICODE);

    } catch (\PDOException $th) {
        throw $th;
        var_dump($th);
            $selectFromDB = new stdClass();

            $selectFromDB->result      = 'ERROR';
            $selectFromDB->message     = $e->getMessage();

            return json_encode($selectFromDB, JSON_UNESCAPED_UNICODE);
            // print "Error!: " . $e->getMessage() . "<br/>";
            die();
    }


