<?php
include "../../php/db.php";
include "../../pages/OneNet/onenet.configuration.php";


if(isset($_GET['idClient'])) {
    $idClient = $_GET['idClient'];
} else {
    $idClient = 1;
}

    /**
     * OLD *-==========================================
     */
    try {

    // $tmpHourArray = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
	// 				0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
	// 			    0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
	// 				0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
	// 				0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
	// 				0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
    // ];


    /**pobranie ostatniej zmiany na danym urządzeniu, przed godziną wyświetlania
     * jako startowa wartość dla zaślepki
     */
    $sql = "SELECT * FROM OneNet.OneNet_pc_mode
    where clientId = '$idClient'
    and timestamp < now() - interval 1 hour
    group by timestamp
    order by timestamp desc
    limit 1;
    ";

		$query = $dbh->prepare($sql);
		$query->execute();

        $startModeValueForChart = 0;
        while($row = $query->fetch() ) :
            $startModeValueForChart = $row['mode'];

        endwhile;

        echo ' <br><br>' . $startModeValueForChart . '<br><br>';

    $tmpHourArray = [];
    $tmpTimestampsArray = [];
    $tmpValueArray = [];
    $timestamp = strtotime(date('Y-m-d H:i:s'));
    for($t = 60; $t >0; $t--) {

            // echo '<br>timestamp ' . $t . ' <br>';
            // var_dump($timestamp);
            // echo '<br>timestamp <br>';
            $time = ' - ' . $t . ' minutes';
            // echo '<br> ' . $time .' <br>';
            $timestamp = date('Y-m-d H:i:00',strtotime($time));
            // var_dump($timestamp);

            // echo '<br>timestamp <br>';
            $tmpArray = [
                $timestamp => $startModeValueForChart
            ];
            array_push($tmpHourArray, $tmpArray);
            array_push($tmpTimestampsArray, $timestamp);
            array_push($tmpValueArray, 0);
    }

    // var_dump($tmpHourArray);

    // var_dump($tmpHourArray);
    // echo '<br><br>';
    //     var_dump($tmpTimestampsArray);
    //     echo '<br><br>';
    //         var_dump($tmpValueArray);
        $sql = "SELECT * FROM OneNet.OneNet_pc_mode
                -- where clientId = '$idClient' and
                where clientId = 1 and
                timestamp > now() - interval 1 hour
                group by timestamp
                order by timestamp asc";
    // $sql = "SELECT idOneNet_measurements, idDevice, idClient, last_power_value, timestamp
    //     FROM OneNet.OneNet_measurements
    //     where idClient = '$idClient'        and
    //     timestamp > now() - interval 1 hour
    //     group by timestamp
    //     order by timestamp asc;";

		$query = $dbh->prepare($sql);
		$query->execute();

        $selectFromDB = new stdClass(); // obiekt na który zrzucimy dane

        $selectedValues = [];

        //zwracana wartość
        $res = [];

        $resPerClient = [];
        $tmpValue = 0;

        while($row = $query->fetch() ) :

            // echo 'test';

            $tmpArray = [];
            $id = $row['idOneNet_pc_mode'];
            $deviceId = $row['deviceId'];
            $clientId = $row['clientId'];
            $mode = $row['mode'];
            // $timestamp = $row['timestamp'];
            $timestamp = strtotime($row['timestamp']);
            /**
             *
             */
            $timestamp = date('Y-m-d H:i:00',$timestamp); // PROBLEM ZE ZMIANĄ
                        echo '<br>&&&&&& TIMESTAMP => <br> '.$timestamp;
                        echo '<br>&&&&&& $row["timestamp"] => <br> '.$row['timestamp'];
                        $timestamp2 = date('Y-m-d H:i:00',$row['timestamp']);
                        echo '<br>&&&&&& date to timestamp => <br> '.$timestamp2;
                        echo '<br><br>';
                            echo $timestamp2;
                        echo '<br><br>';

            /**
             *
             */
            // echo '<br>@@@@@@@@@@@@@<br> $row=> '.$row['timestamp'].'<br><br>';
            // var_dump($row['timestamp']);
            // echo '<br><br> $timestamp=> '.$timestamp.'<br>*********<br>';
            // var_dump($row['timestamp']);
            // echo '<br><br> $tmpArray[$timestamp]=> '.$tmpArray[$timestamp].'<br>*********<br>';
            // var_dump($tmpArray[$timestamp]);
            // var_dump($tmpArray);

            $tmpArray['id']                 = $id;
            $tmpArray['idDevice']           = $deviceId;
            $tmpArray['idClient']           = $clientId;
            $tmpArray['clientName']         = $oneNetConfiguration[$clientId]['nazwaOdbiorcy'];
            $tmpArray['mode']   = $mode;


                        echo '<br>&&&&&& TIMESTAMP => <br> '.$timestamp;
            if($tmpValue != $mode) {
                $tmpValue = $mode;
                $tmpArray[$timestamp] = $tmpValue;

                // echo '<br>&&&&&&<br> '.$timestamp;
                // var_dump($tmpArray[$timestamp]);
                // echo echo '<br>'.$tmpValue.'<br>&&&&&&<br>';
                // $tmpArray['mode']  = $tmpValue;
            }
            $tmpArray['timestamp']          = $timestamp;



            // if($mode != 0) {
            //     echo $timestamp. ' ' . $mode;
            // }
            // if($tmpValue != $mode) {
            //     $tmpValue = $mode;
            //     $tmpArray[$timestamp] = $tmpValue;
            // }
            $tmpHourArray[$timestamp] = $tmpValue;
            $tmpArray[$timestamp] = $tmpValue;





            array_push($selectedValues, $tmpArray);

            $resPerClient[$idClient] = $selectedValues;
//             echo '<br><br>   var_dump($tmpHourArray)=> '.$timestamp.'<br>*********<br><br>';
//   var_dump($tmpHourArray);
//   echo '<br>*********<br><br>';
        endwhile;
        $res[$idClient] = $selectedValues;
        $res['hourValue'] = $tmpHourArray;
        $res['timestamps'] = $tmpTimestampsArray;
        $res['values'] = $tmpHourArray;

        // echo '<br><br>';
        // var_dump($tmpHourArray);
        foreach ($tmpHourArray as $key => $value) {

            # code...
            // echo '<br><br> $timestamp => ' . $key. ' value =>  ' . $value . '<br><br>';
            foreach ($value as $keyS => $valueS) {
            //  echo '<br><br> $timestamp => ' . $keyS. ' value =>  ' . $valueS . '<br><br>';
            }
        }
        // var_dump($tmpHourArray);




        echo json_encode($res, JSON_UNESCAPED_UNICODE);

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


