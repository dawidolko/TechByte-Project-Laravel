<?php

namespace Database\Seeders;

use App\Models\Klienci;
use Illuminate\Database\Seeder;

class KlienciSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Remove all rows from the table before adding new records
         */
        Klienci::truncate();

        Klienci::insert([
            [
                'ID_KLIENTA' => 1,
                'IMIE' => 'Róża',
                'NAZWISKO' => 'Kraszkiewicz',
                'ADRES_DOSTAWY' => 'pl. Graniczna 33 52-606 Police',
                'NR_TELEFONU' => '576 741 468',
                'EMAIL' => 'cczerner@onet.pl',
                'HASLO' => 'MQ8FlMj4&tV9',
            ],
            [
                'ID_KLIENTA' => 2,
                'IMIE' => 'Hubert',
                'NAZWISKO' => 'Szarzec',
                'ADRES_DOSTAWY' => 'ulica Skłodowskiej-Curie 93 87-069 Zduńska Wola',
                'NR_TELEFONU' => '608 986 389',
                'EMAIL' => 'yjarmuz@grupa.net',
                'HASLO' => 'n#6#42Bsqo8D',
            ],
            [
                'ID_KLIENTA' => 3,
                'IMIE' => 'Dorota',
                'NAZWISKO' => 'Borak',
                'ADRES_DOSTAWY' => 'pl. Lubelska 76/98 57-794 Przemyśl',
                'NR_TELEFONU' => '694 988 359',
                'EMAIL' => 'angelika84@interia.pl',
                'HASLO' => 'A_Y_pY0pIO7F',
            ],
            [
                'ID_KLIENTA' => 4,
                'IMIE' => 'Oliwier',
                'NAZWISKO' => 'Klorek',
                'ADRES_DOSTAWY' => 'pl. Asnyka 59 46-596 Zawiercie',
                'NR_TELEFONU' => '732 567 190',
                'EMAIL' => 'aleksandertuzimek@piejko.net',
                'HASLO' => '@fMZ%Ymq7@HT',
            ],
            [
                'ID_KLIENTA' => 5,
                'IMIE' => 'Angelika',
                'NAZWISKO' => 'Chowaniak',
                'ADRES_DOSTAWY' => 'plac Dąbrowskiego 69/69 58-964 Biłgoraj',
                'NR_TELEFONU' => '721 740 009',
                'EMAIL' => 'ckazek@meler-szpala.com',
                'HASLO' => 'n!X7+Psk64i*',
            ],
            [
                'ID_KLIENTA' => 6,
                'IMIE' => 'Grzegorz',
                'NAZWISKO' => 'Żołądkiewicz',
                'ADRES_DOSTAWY' => 'ulica Towarowa 41 61-434 Świecie',
                'NR_TELEFONU' => '691 404 907',
                'EMAIL' => 'igrzywnowicz@borejko-kapral.pl',
                'HASLO' => '!mNShAKf_^6W',
            ],
            [
                'ID_KLIENTA' => 7,
                'IMIE' => 'Nela',
                'NAZWISKO' => 'Plewnia',
                'ADRES_DOSTAWY' => 'pl. Staffa 30 67-674 Ostrowiec Świętokrzyski',
                'NR_TELEFONU' => '888 342 505',
                'EMAIL' => 'kukuczkacyprian@ppuh.pl',
                'HASLO' => '^3*YwBXd6ItO',
            ],
            [
                'ID_KLIENTA' => 8,
                'IMIE' => 'Adrianna',
                'NAZWISKO' => 'Goworek',
                'ADRES_DOSTAWY' => 'pl. Krańcowa 29/72 58-694 Oświęcim',
                'NR_TELEFONU' => '662 165 353',
                'EMAIL' => 'justynakosciolek@fpuh.com',
                'HASLO' => 'y9OEYxiB^@8f',
            ],
            [
                'ID_KLIENTA' => 9,
                'IMIE' => 'Stanisław',
                'NAZWISKO' => 'Hawrylak',
                'ADRES_DOSTAWY' => 'ul. Osiedlowa 38/19 63-584 Chorzów',
                'NR_TELEFONU' => '505 436 705',
                'EMAIL' => 'nmich@interia.pl',
                'HASLO' => 'v!J9BMs)&%6D',
            ],
            [
                'ID_KLIENTA' => 10,
                'IMIE' => 'Juliusz',
                'NAZWISKO' => 'Roczniak',
                'ADRES_DOSTAWY' => 'ulica Makuszyńskiego 110 50-650 Skierniewice',
                'NR_TELEFONU' => '786 072 638',
                'EMAIL' => 'adammachniak@fpuh.pl',
                'HASLO' => 'nKL7uWQzGo@a',
            ],
            [
                'ID_KLIENTA' => 11,
                'IMIE' => 'Klara',
                'NAZWISKO' => 'Bugno',
                'ADRES_DOSTAWY' => 'al. Willowa 09/83 51-913 Inowrocław',
                'NR_TELEFONU' => '22 706 52 19',
                'EMAIL' => 'ewelinapazdan@gabinety.com',
                'HASLO' => 'epe6Lw(v++wM',
            ],
            [
                'ID_KLIENTA' => 12,
                'IMIE' => 'Maksymilian',
                'NAZWISKO' => 'Saczuk',
                'ADRES_DOSTAWY' => 'plac Górska 065 35-648 Lubin',
                'NR_TELEFONU' => '888 093 377',
                'EMAIL' => 'fkornet@gmail.com',
                'HASLO' => 'u3^SlCKh(S!7',
            ],
            [
                'ID_KLIENTA' => 13,
                'IMIE' => 'Aniela',
                'NAZWISKO' => 'Młot',
                'ADRES_DOSTAWY' => 'plac Cisowa 21/41 49-619 Skarżysko-Kamienna',
                'NR_TELEFONU' => '48 519 388 533',
                'EMAIL' => 'hornikkornel@yahoo.com',
                'HASLO' => '*U*acGaFh6VM',
            ],
            [
                'ID_KLIENTA' => 14,
                'IMIE' => 'Dagmara',
                'NAZWISKO' => 'Królczyk',
                'ADRES_DOSTAWY' => 'aleja Królewska 512 07-942 Chełm',
                'NR_TELEFONU' => '698 720 861',
                'EMAIL' => 'sandrakrus@fpuh.pl',
                'HASLO' => '@jYSW+z^u6au',
            ],
            [
                'ID_KLIENTA' => 15,
                'IMIE' => 'Paweł',
                'NAZWISKO' => 'Łyp',
                'ADRES_DOSTAWY' => 'plac Wiązowa 20/40 81-712 Kraśnik',
                'NR_TELEFONU' => '22 888 55 88',
                'EMAIL' => 'nela53@stowarzyszenie.net',
                'HASLO' => '!6KIjHCAf6yk',
            ],
            [
                'ID_KLIENTA' => 16,
                'IMIE' => 'Tobiasz',
                'NAZWISKO' => 'Pietrus',
                'ADRES_DOSTAWY' => 'aleja Wspólna 57 39-619 Lubliniec',
                'NR_TELEFONU' => '786 448 347',
                'EMAIL' => 'mateuszniescior@yahoo.com',
                'HASLO' => ')HU+SVxl1ZHq',
            ],
            [
                'ID_KLIENTA' => 17,
                'IMIE' => 'Marek',
                'NAZWISKO' => 'Szabla',
                'ADRES_DOSTAWY' => 'ul. Wilcza 64 07-893 Skarżysko-Kamienna',
                'NR_TELEFONU' => '604 393 808',
                'EMAIL' => 'nierodaada@bienia.pl',
                'HASLO' => '1p^5YCKqU0O#',
            ],
            [
                'ID_KLIENTA' => 18,
                'IMIE' => 'Nicole',
                'NAZWISKO' => 'Chomiak',
                'ADRES_DOSTAWY' => 'plac Kopernika 36 20-273 Żagań',
                'NR_TELEFONU' => '574 040 962',
                'EMAIL' => 'dberendt@hotmail.com',
                'HASLO' => '!MvQDuyjDP5V',
            ],
            [
                'ID_KLIENTA' => 19,
                'IMIE' => 'Marianna',
                'NAZWISKO' => 'Sommerfeld',
                'ADRES_DOSTAWY' => 'ulica Ludowa 20 14-589 Ostrów Mazowiecka',
                'NR_TELEFONU' => '781 883 103',
                'EMAIL' => 'olaf94@grupa.com',
                'HASLO' => '*#rPUNspOS5h',
            ],
            [
                'ID_KLIENTA' => 20,
                'IMIE' => 'Urszula',
                'NAZWISKO' => 'Smykała',
                'ADRES_DOSTAWY' => 'aleja Nadbrzeżna 02/43 14-979 Gdańsk',
                'NR_TELEFONU' => '691 234 921',
                'EMAIL' => 'aleksandertarasek@hotmail.com',
                'HASLO' => '^hZNGilyA3Qi',
            ],
        ]);
    }
}
