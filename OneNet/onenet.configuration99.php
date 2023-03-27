<?php


$oneNetConfiguration = array(
    array(
        "clientId" => 1,
        "nazwaOdbiorcy" => "M.J. Kasztanowa 1, Przywidz",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 7,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243833012754918",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 6, // w kWp
                "adresUrzadzenia" => "http://31.0.201.158" // z pliku

            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 6.51, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
    array(
        "clientId" => 2,
        "nazwaOdbiorcy" => "C.H. Kasztanowa 6 Przywidz",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243833012898643",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 6, // w kWp
                "adresUrzadzenia" => "http://31.0.200.95" // z pliku
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 6.2, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
    array(
        "clientId" => 3,
        "nazwaOdbiorcy" => "Z.N. Kasztanowa 7, Przywidz",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "PL0037330051239890",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 7, // w kWp
                "adresUrzadzenia" => "http://46.77.72.216" // z pliku
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.44, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
        array(
        "clientId" => 4,
        "nazwaOdbiorcy" => "S.H. Kasztanowa 3, Przywidz",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 12.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876040845000",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "http://31.0.207.185" // z pliku
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.425, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
    array(
        "clientId" => 5,
        "nazwaOdbiorcy" => "Hala Sportowa 31.0.208.227",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 12.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876040102000",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 6, // w kWp
                "adresUrzadzenia" => "http://31.0.208.227" // z pliku
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.29, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
    array(
        "clientId" => 6,
        "nazwaOdbiorcy" => "Hala Sportowa 46.77.79.92",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 12.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876040227672",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "http://46.77.79.92" // z pliku
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.29, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
    array(
        "clientId" => 7,
        "nazwaOdbiorcy" => "Hydrofornia",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 12.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876040102849",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 6, // w kWp
                "adresUrzadzenia" => "http://37.98.212.115" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.29, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
    array(
        "clientId" => 8,
        "nazwaOdbiorcy" => "Przedszkole ul. Cisowa 12",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "http://46.77.82.187" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
        array(
        "clientId" => 9,
        "nazwaOdbiorcy" => "Oczyszczalnia ścieków 46.77.84.117",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "http://46.77.84.117" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
        array(
        "clientId" => 10,
        "nazwaOdbiorcy" => "Oczyszczalnia ścieków 31.0.219.86",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "http://31.0.219.86" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
        array(
        "clientId" => 11,
        "nazwaOdbiorcy" => "Urząd Gminy 46.77.84.99",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "http://46.77.84.99" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
        array(
        "clientId" => 12,
        "nazwaOdbiorcy" => "PUrząd Gminy 37.98.211.249",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "http://37.98.211.249" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
        array(
        "clientId" => 13,
        "nazwaOdbiorcy" => "M.C. Cisowa 8",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "http://31.0.210.92" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
        array(
        "clientId" => 14,
        "nazwaOdbiorcy" => "M.C. Kwiatowa 1a",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "http://31.0.208.219" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
        array(
        "clientId" => 15,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "http://31.0.210.234" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
        array(
        "clientId" => 16,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
            array(
        "clientId" => 17,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
            array(
        "clientId" => 18,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
            array(
        "clientId" => 19,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
            array(
        "clientId" => 20,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                array(
        "clientId" => 21,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                array(
        "clientId" => 22,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                array(
        "clientId" => 23,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                array(
        "clientId" => 24,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                array(
        "clientId" => 25,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                array(
        "clientId" => 26,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                array(
        "clientId" => 27,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                array(
        "clientId" => 28,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                array(
        "clientId" => 29,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                array(
        "clientId" => 30,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                    array(
        "clientId" => 31,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                    array(
        "clientId" => 32,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                    array(
        "clientId" => 33,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                    array(
        "clientId" => 34,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                    array(
        "clientId" => 35,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                    array(
        "clientId" => 36,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                    array(
        "clientId" => 37,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                    array(
        "clientId" => 38,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                    array(
        "clientId" => 39,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                    array(
        "clientId" => 40,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 41,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 42,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 43,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 44,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 45,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 46,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 47,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 48,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 49,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 50,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 51,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 52,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 53,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 54,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 55,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 56,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 57,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                        array(
        "clientId" => 58,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                            array(
        "clientId" => 59,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                            array(
        "clientId" => 60,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                array(
        "clientId" => 61,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                array(
        "clientId" => 62,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                array(
        "clientId" => 63,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                array(
        "clientId" => 64,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                array(
        "clientId" => 65,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                array(
        "clientId" => 66,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                array(
        "clientId" => 67,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                array(
        "clientId" => 68,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                array(
        "clientId" => 69,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                array(
        "clientId" => 70,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                array(
        "clientId" => 71,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 72,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 73,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 74,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 75,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 76,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 77,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 78,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 79,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 80,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 81,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 82,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 83,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 84,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 85,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 86,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 87,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 88,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 89,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 90,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 91,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 92,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 93,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 94,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 95,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 96,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 97,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),
                                    array(
        "clientId" => 98,
        "nazwaOdbiorcy" => "Szkoła podstawowa",
        "typKlienta" => "indywidualny",
        "obszar" => "Przywidz",
        "napiecie" => "nn",
        "mocUmowna" => 10.5,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "590243876041216118",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),

        array(
        "clientId" => 99,
        "nazwaOdbiorcy" => "Suma",
        "typKlienta" => "asd",
        "obszar" => "asd",
        "napiecie" => "nn",
        "mocUmowna" => 0,
        "ppe" => // dane do poprawek - DSR ma uaktualnić
            array(
                "ppeGS1" => "1",//nowe pse - te używać
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "fotoWoltalika" =>
            array(
                "generacjaPV" => 5, // w kWp
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),
        "pompaCiepla" => //dsr-hp
            array(
                "dsrHP" => 7.26, // wartość przykładowa - max kW
                "adresUrzadzenia" => "https://onenet.advant.pl" //IP urządzenia dla wywołania API
            ),

    ),

);


// var_dump($oneNetConfiguration);
?>