<?php

namespace App\Classes;

use Log;

class GetDataApi {

    protected $email;
    protected $password;
    private const API_EMAIL = '';
    private const API_PASSWORD = '';
    private const URL_ENSPIRION = '';

    public function __construct()
    {
        $this->email = self::API_EMAIL;
        $this->password = self::API_PASSWORD;
    }

    public function getDataDevice($clientId, $deviceAddress)
    {

        // dd($this->email);
        if(isset($deviceAddress)) {
            $deviceAddress = $deviceAddress;
        } else {
            $deviceAddress = self::URL_ENSPIRION;
        }
        
        $device = $deviceAddress;
        $deviceAddress = $deviceAddress . '/';
        $url = $deviceAddress . 'login';

        // dd($deviceAddress);

        $curl = curl_init($deviceAddress.'login');
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = <<<DATA
        {
        "email":"$this->email",
        "password":"$this->password"
        }
        DATA;

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);

        curl_close($curl);
        $respoToken = json_decode($resp);
        $token = $respoToken->{'access_token'};

        $response = [];
        $tmpArray = [];
        $response['clientId'] = $clientId;
        $response['device'] = $device;

        $gRes = $this->getDataFromDevice($clientId, $deviceAddress."last_voltage", $token, "last_voltage");
        $tmpArray = array_merge($gRes, $tmpArray);

        
        $gRes = $this->getDataFromDevice($clientId, $deviceAddress."last_power", $token, "last_power");
        $tmpArray = array_merge($gRes, $tmpArray);
        
        $gRes = $this->getDataFromDevice($clientId, $deviceAddress."last_frequency", $token, "last_frequency");
        $tmpArray = array_merge($gRes, $tmpArray);
        
        $gRes = $this->getDataFromDevice($clientId, $deviceAddress."energy_data", $token,"energy_data");
        $tmpArray = array_merge($gRes, $tmpArray);
        
        $gRes = $tmpArray;
        
        return $gRes;
    }

    function getDataFromDevice($clientId, $url, $token, $leaf) 
    {
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
            $resName = $leaf;
            $resName = $resName.'_'.$key;
            $res[$resName] = $value;
        }

        return $res;
    }


}
