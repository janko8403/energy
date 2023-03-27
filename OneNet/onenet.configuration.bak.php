<?php


$oneNetConfiguration = array(
    //     array(
    //     "clientId" => 0,
    //     "nazwaOdbiorcy" => "Testowy",
    //     "typKlienta" => "indywidualny",
    //     "obszar" => "Gdańsk",
    //     "napiecie" => "nn",
    //     "mocUmowna" => 11,
    //     "ppe" => // dane do poprawek - DSR ma uaktualnić
    //         array(
    //             //  "ppeId" => 0,
    //            //  "starePPE" => "ASD", // nieaktualne
    //             "ppeGS1" => "ASD123",//nowe pse - te używać
    //             "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
    //         ),
    //     "fotoWoltalika" =>
    //         array(
    //             //  "pvId" => 0,
    //             "generacjaPV" => 5, // w kWp
    //             "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
    //         ),
    //     "pompaCiepla" => //dsr-hp
    //         array(
    //             //  "pcId" => 0,
    //             "dsrHP" => 5, // wartość przykładowa - max kW
    //             "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
    //         ),

    // ),
    array(
        "clientId" => 1,
        "nazwaOdbiorcy" => "Michał Jasiński",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 7,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                //  "ppeId" => 1,
               //  "starePPE" => "PL0037330051239183", // nieaktualne
                "ppeGS1" => "590243833012754918",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                //  "pvId" => 1,
                "generacjaPV" => 6, // w kWp
                // "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API - swagger
                "adresUrzadzenia" => "http://91.232.48.210" //IP urządzenia dla wywołania API - fizyczne urządzenie
                // "adresUrzadzenia" => "http://46.77.72.216" //IP urządzenia dla wywołania API - fizyczne urządzenie
                //46.77.72.216 - testowy IP
            ),
        "pompaCiepla" => //dsr-hp
            array(
                //  "pcId" => 1,
                "dsrHP" => 6.51, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
    array(
        "clientId" => 2,
        "nazwaOdbiorcy" => "Barbara Borowska",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                //  "ppeId" => 2,
               //  "starePPE" => "PL0037330051246257", // nieaktualne
                "ppeGS1" => "590243833012898643",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                //  "pvId" => 2,
                "generacjaPV" => 6, // w kWp
                "adresUrzadzenia" => "https://31.0.219.2" //IP urządzenia dla wywołania API
                // "adresUrzadzenia" => "http://91.232.48.210" //IP urządzenia dla wywołania API - fizyczne urządzenie
            ),
        "pompaCiepla" => //dsr-hp
            array(
                //  "pcId" => 2,
                "dsrHP" => 6.2, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
    array(
        "clientId" => 3,
        "nazwaOdbiorcy" => "Christian Herbasz",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                //  "ppeId" => 3,
               //  "starePPE" => "PL0037330051239890", // nieaktualne
                "ppeGS1" => "PL0037330051239890",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                //  "pvId" => 3,
                "generacjaPV" => 7, // w kWp
                "adresUrzadzenia" => "https://31.0.220.17" //IP urządzenia dla wywołania API
                // "adresUrzadzenia" => "http://91.232.48.210:80" //IP urządzenia dla wywołania API - fizyczne urządzenie
            ),
        "pompaCiepla" => //dsr-hp
            array(
                //  "pcId" => 3,
                "dsrHP" => 7.44, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
        array(
        "clientId" => 4,
        "nazwaOdbiorcy" => "Ewa Bukowska",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 12.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                //  "ppeId" => 4,
               //  "starePPE" => "PL0037760000626710", // nieaktualne
                "ppeGS1" => "590243876040845000",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                //  "pvId" => 4,
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://31.0.222.235" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                //  "pcId" => 4,
                "dsrHP" => 7.425, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
    array(
        "clientId" => 5,
        "nazwaOdbiorcy" => "Janusz Tesznar",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 12.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                //  "ppeId" => 5,
               //  "starePPE" => "PL0037760000503006", // nieaktualne
                "ppeGS1" => "590243876040102000",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                //  "pvId" => 5,
                "generacjaPV" => 6, // w kWp
                "adresUrzadzenia" => "https://31.0.220.215" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                //  "pcId" => 5,
                "dsrHP" => 7.29, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
    array(
        "clientId" => 6,
        "nazwaOdbiorcy" => "Jarosław Jarosiński",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 12.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                //  "ppeId" => 6,
               //  "starePPE" => "PL0037760000516806", // nieaktualne
                "ppeGS1" => "590243876040227672",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                //  "pvId" => 6,
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "http://31.0.221.236" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                //  "pcId" => 6,
                "dsrHP" => 7.29, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
    array(
        "clientId" => 7,
        "nazwaOdbiorcy" => "Krzysztof Smoliński",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 12.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                //  "ppeId" => 8,
               //  "starePPE" => "PL0037760000503203", // nieaktualne
                "ppeGS1" => "590243876040102849",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                //  "pvId" => 8,
                "generacjaPV" => 6, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                //  "pcId" => 8,
                "dsrHP" => 7.29, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
    array(
        "clientId" => 8,
        "nazwaOdbiorcy" => "Mariusz Zając",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                //  "ppeId" => 9,
               //  "starePPE" => "PL0037760000703506", // nieaktualne
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                //  "pvId" => 9,
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                //  "pcId" => 9,
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
        array(
        "clientId" => 9,
        "nazwaOdbiorcy" => "Suma",
        "typKlienta" => "asd",
        "obszar" => "asd",
        "napiecie" => "nn",
        "mocUmowna" => 0,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                //  "ppeId" => 9,
               //  "starePPE" => "PL0037760000703506", // nieaktualne
                "ppeGS1" => "1",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                //  "pvId" => 9,
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                //  "pcId" => 9,
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),

);


// var_dump($oneNetConfiguration);
?>