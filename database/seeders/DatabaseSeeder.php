<?php

use Illuminate\Database\Seeder;
use App\Models\{Role, User, Configuration, Area, Pv};
use App\Enums\AreaType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        $oneNetConfiguration = array(
            array(
                "clientId" => 1,
                "nazwaOdbiorcy" => "M.J. Kasztanowa 1, Przywidz",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 7,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243833012754918",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 6,
                        "adresUrzadzenia" => "http://31.0.201.158"

                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 6.51,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
            array(
                "clientId" => 2,
                "nazwaOdbiorcy" => "C.H. Kasztanowa 6 Przywidz",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 10,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243833012898643",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 6,
                        "adresUrzadzenia" => "http://31.0.200.95"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 6.2,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
            array(
                "clientId" => 3,
                "nazwaOdbiorcy" => "Z.N. Kasztanowa 7, Przywidz",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 10,
                "ppe" =>
                    array(
                        "ppeGS1" => "PL0037330051239890",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 7,
                        "adresUrzadzenia" => "http://46.77.72.216"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.44,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
                array(
                "clientId" => 4,
                "nazwaOdbiorcy" => "S.H. Kasztanowa 3, Przywidz",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 12.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876040845000",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 5,
                        "adresUrzadzenia" => "http://31.0.207.185"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.425,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
            array(
                "clientId" => 5,
                "nazwaOdbiorcy" => "Hala Sportowa 31.0.208.227",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 12.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876040102000",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 6,
                        "adresUrzadzenia" => "http://31.0.208.227"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.29,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
            array(
                "clientId" => 6,
                "nazwaOdbiorcy" => "Hala Sportowa 46.77.79.92",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 12.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876040227672",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 5,
                        "adresUrzadzenia" => "http://46.77.79.92"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.29,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
            array(
                "clientId" => 7,
                "nazwaOdbiorcy" => "Hydrofornia",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 12.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876040102849",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 6,
                        "adresUrzadzenia" => "http://37.98.212.115"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.29,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
            array(
                "clientId" => 8,
                "nazwaOdbiorcy" => "Przedszkole ul. Cisowa 12",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 10.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876041216118",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 5,
                        "adresUrzadzenia" => "http://46.77.82.187"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.26,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
                array(
                "clientId" => 9,
                "nazwaOdbiorcy" => "Oczyszczalnia ścieków 46.77.84.117",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 10.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876041216118",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 5,
                        "adresUrzadzenia" => "http://46.77.84.117"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.26,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
                array(
                "clientId" => 10,
                "nazwaOdbiorcy" => "Oczyszczalnia ścieków 31.0.219.86",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 10.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876041216118",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 5,
                        "adresUrzadzenia" => "http://31.0.219.86"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.26,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
                array(
                "clientId" => 11,
                "nazwaOdbiorcy" => "Urząd Gminy 46.77.84.99",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 10.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876041216118",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 5,
                        "adresUrzadzenia" => "http://46.77.84.99"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.26,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
                array(
                "clientId" => 12,
                "nazwaOdbiorcy" => "PUrząd Gminy 37.98.211.249",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 10.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876041216118",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 5,
                        "adresUrzadzenia" => "http://37.98.211.249"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.26,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
                array(
                "clientId" => 13,
                "nazwaOdbiorcy" => "M.C. Cisowa 8",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 10.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876041216118",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 5,
                        "adresUrzadzenia" => "http://31.0.210.92"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.26,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
                array(
                "clientId" => 14,
                "nazwaOdbiorcy" => "M.C. Kwiatowa 1a",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 10.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876041216118",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 5,
                        "adresUrzadzenia" => "http://31.0.208.219"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.26,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
                array(
                "clientId" => 15,
                "nazwaOdbiorcy" => "Szkoła podstawowa",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 10.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876041216118",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 5,
                        "adresUrzadzenia" => "http://31.0.210.234"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.26,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
                array(
                "clientId" => 16,
                "nazwaOdbiorcy" => "Cisowa 14",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 10.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876041216118",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 5,
                        "adresUrzadzenia" => "http://31.0.220.178"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.26,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
                    array(
                "clientId" => 17,
                "nazwaOdbiorcy" => "Kasztanowa 2",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 10.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876041216118",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 5,
                        "adresUrzadzenia" => "http://31.0.224.42"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.26,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
                    array(
                "clientId" => 18,
                "nazwaOdbiorcy" => "Kwiatowa 3",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 10.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876041216118",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 5,
                        "adresUrzadzenia" => "http://31.0.210.93"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.26,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
                    array(
                "clientId" => 19,
                "nazwaOdbiorcy" => "Różana 3a",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 10.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876041216118",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 5,
                        "adresUrzadzenia" => "http://46.77.78.135"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.26,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            ),
                    array(
                "clientId" => 20,
                "nazwaOdbiorcy" => "Różana 9",
                "typKlienta" => "indywidualny",
                "obszar" => "Przywidz",
                "napiecie" => "nn",
                "mocUmowna" => 10.5,
                "ppe" =>
                    array(
                        "ppeGS1" => "590243876041216118",
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),
                "fotoWoltalika" =>
                    array(
                        "generacjaPV" => 5,
                        "adresUrzadzenia" => "http://31.0.218.0"
                    ),
                "pompaCiepla" =>
                    array(
                        "dsrHP" => 7.26,
                        "adresUrzadzenia" => "https://onenet.advant.pl"
                    ),

            )
        );

        Area::create(
            ['area' => AreaType::przywidz]
        );

        Area::create(
            ['area' => AreaType::mlawa]
        );

        foreach ($oneNetConfiguration as $key => $value) {
            $pv = Pv::create([
                'generacja' => $value['fotoWoltalika']['generacjaPV'],
                'adres' => $value['fotoWoltalika']['adresUrzadzenia']
            ]);
            Configuration::create([
                'nazwaOdbiorcy' => $value['nazwaOdbiorcy'],
                'mocUmowna' => $value['mocUmowna'],
                'typKlienta' => $value['typKlienta'],
                'napiecie' => $value['napiecie'],
                'area_id' => (($value['obszar'] == 'Przywidz') ? 1 : 2),
                'pv_id' => $pv->id
            ]);
        }

        $role_admin = new Role();
        $role_admin->name = "Admin";
        $role_admin->description = "Administrator";
        $role_admin->save();

        $role_user = new Role();
        $role_user->name = "User";
        $role_user->description = "Użytkownik";
        $role_user->save();

        $role_admin = Role::where('name', 'Admin')->first();
        $role_user = Role::where('name', 'User')->first();

        $admin = new User();
        $admin->name = "Jan";
        $admin->email = "test@test.pl";
        $admin->password = bcrypt('111111');
        $admin->email_verified_at = date("Y-m-d h:i:s");
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
