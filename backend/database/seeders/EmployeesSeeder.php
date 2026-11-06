<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employees;
use Illuminate\Support\Facades\Hash;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate the existing records to start from scratch
        Employees::truncate();

        // Define the data for employees
        $employees = [
            [
                'ID' => 1,
                'NAME' => 'Alex',
                'LAST_NAME' => 'Kopytko',
                'JOB_POSITION' => 'Specjalista ds. IT',
                'EMAIL' => 'aurelia23@stowarzyszenie.pl',
                'PHONE_NUMBER' => '48 609 956 304',
                'PASSWORD' => Hash::make('Haslo123@'),
            ],
            [
                'ID' => 2,
                'NAME' => 'Rafał',
                'LAST_NAME' => 'Smela',
                'JOB_POSITION' => 'Specjalista ds. IT',
                'EMAIL' => 'xdziurdzia@gmail.com',
                'PHONE_NUMBER' => '539 040 853',
                'PASSWORD' => Hash::make('n#6#3Vx4#1Ds'),
            ],
            [
                'ID' => 3,
                'NAME' => 'Dariusz',
                'LAST_NAME' => 'Ciuła',
                'JOB_POSITION' => 'Sprzedawca',
                'EMAIL' => 'fliegereryk@fundacja.pl',
                'PHONE_NUMBER' => '509 339 857',
                'PASSWORD' => Hash::make('n#6#5W6d#2Hk'),
            ],
            [
                'ID' => 4,
                'NAME' => 'Stefan',
                'LAST_NAME' => 'Startek',
                'JOB_POSITION' => 'Menadżer Produktu',
                'EMAIL' => 'drobnikada@gabinety.org',
                'PHONE_NUMBER' => '534 017 853',
                'PASSWORD' => Hash::make('n#6#8Q1h3UyS'),
            ],
            [
                'ID' => 5,
                'NAME' => 'Ada',
                'LAST_NAME' => 'Lejman',
                'JOB_POSITION' => 'Doradca Klienta',
                'EMAIL' => 'blanka27@o2.pl',
                'PHONE_NUMBER' => '48 726 561 590',
                'PASSWORD' => Hash::make('n#6#2I4j9RlE'),
            ],
            [
                'ID' => 6,
                'NAME' => 'Ida',
                'LAST_NAME' => 'Kara',
                'JOB_POSITION' => 'Doradca Klienta',
                'EMAIL' => 'karina53@ceran-kuza.com',
                'PHONE_NUMBER' => '48 663 839 690',
                'PASSWORD' => Hash::make('n#6#7S5z6MvT'),
            ],
            [
                'ID' => 7,
                'NAME' => 'Sara',
                'LAST_NAME' => 'Korgul',
                'JOB_POSITION' => 'Technik PC',
                'EMAIL' => 'natasza68@gmail.com',
                'PHONE_NUMBER' => '575 592 622',
                'PASSWORD' => Hash::make('n#6#4O9#8NcX'),
            ],
            [
                'ID' => 8,
                'NAME' => 'Dominik',
                'LAST_NAME' => 'Latuszek',
                'JOB_POSITION' => 'Technik PC',
                'EMAIL' => 'borys15@o2.pl',
                'PHONE_NUMBER' => '504 971 697',
                'PASSWORD' => Hash::make('n#6#3U7a5JbF'),
            ],
            [
                'ID' => 9,
                'NAME' => 'Tomasz',
                'LAST_NAME' => 'Garbacik',
                'JOB_POSITION' => 'Specjalista ds. IT',
                'EMAIL' => 'wgruszczyk@fpuh.com',
                'PHONE_NUMBER' => '48 662 118 943',
                'PASSWORD' => Hash::make('n#6#9T8b#1FaC'),
            ],
            [
                'ID' => 10,
                'NAME' => 'Natan',
                'LAST_NAME' => 'Kuryłowicz',
                'JOB_POSITION' => 'Menadżer Produktu',
                'EMAIL' => 'malyszekjedrzej@grupa.net',
                'PHONE_NUMBER' => '48 691 523 794',
                'PASSWORD' => Hash::make('n#6#6Z4m7YpA'),
            ],
            [
                'ID' => 11,
                'NAME' => 'Krzysztof',
                'LAST_NAME' => 'Hajder',
                'JOB_POSITION' => 'Sprzedawca',
                'EMAIL' => 'jedrzejmajczyna@o2.pl',
                'PHONE_NUMBER' => '575 212 856',
                'PASSWORD' => Hash::make('n#6#9T8b#1XXC'),
            ],
            [
                'ID' => 12,
                'NAME' => 'Ignacy',
                'LAST_NAME' => 'Uzar',
                'JOB_POSITION' => 'Sprzedawca',
                'EMAIL' => 'dorota26@o2.pl',
                'PHONE_NUMBER' => '531 792 172',
                'PASSWORD' => Hash::make('n#6#9T8b#1FaC'),
            ],
            [
                'ID' => 13,
                'NAME' => 'Justyna',
                'LAST_NAME' => 'Rzeźniczek',
                'JOB_POSITION' => 'Technik PC',
                'EMAIL' => 'ngaudyn@interia.pl',
                'PHONE_NUMBER' => '508 449 644',
                'PASSWORD' => Hash::make('n#6#2Q5c9PxR'),
            ],
            [
                'ID' => 14,
                'NAME' => 'Daniel',
                'LAST_NAME' => 'Chodak',
                'JOB_POSITION' => 'Sprzedawca',
                'EMAIL' => 'kornelrembisz@interia.pl',
                'PHONE_NUMBER' => '532 866 780',
                'PASSWORD' => Hash::make('n#6#5G8t#4WsD'),
            ],
            [
                'ID' => 15,
                'NAME' => 'Maciej',
                'LAST_NAME' => 'Szpyra',
                'JOB_POSITION' => 'Menadżer Produktu',
                'EMAIL' => 'anitabilik@gmail.com',
                'PHONE_NUMBER' => '506 529 947',
                'PASSWORD' => Hash::make('n#6#7L3e6IwF'),
            ],
            [
                'ID' => 16,
                'NAME' => 'Oskar',
                'LAST_NAME' => 'Nesterowicz',
                'JOB_POSITION' => 'Menadżer Produktu',
                'EMAIL' => 'xgogacz@gmail.com',
                'PHONE_NUMBER' => '791 592 264',
                'PASSWORD' => Hash::make('n#6#4E9r#7KaZ'),
            ],
            [
                'ID' => 17,
                'NAME' => 'Olgierd',
                'LAST_NAME' => 'Behrendt',
                'JOB_POSITION' => 'Doradca Klienta',
                'EMAIL' => 'rpacyga@stowarzyszenie.com',
                'PHONE_NUMBER' => '48 603 829 787',
                'PASSWORD' => Hash::make('n#6#8X2u5VoS'),
            ],
            [
                'ID' => 18,
                'NAME' => 'Anna Maria',
                'LAST_NAME' => 'Łasica',
                'JOB_POSITION' => 'Specjalista ds. IT',
                'EMAIL' => 'aprochownik@rubacha-wieladek.pl',
                'PHONE_NUMBER' => '605 203 715',
                'PASSWORD' => Hash::make('n#6#6C9v#3LnM'),
            ],
            [
                'ID' => 19,
                'NAME' => 'Iwo',
                'LAST_NAME' => 'Duszczyk',
                'JOB_POSITION' => 'Sprzedawca',
                'EMAIL' => 'karmelitaelzbieta@onet.pl',
                'PHONE_NUMBER' => '+48 22 775 26 57',
                'PASSWORD' => Hash::make('n#6#2A7p4DtH'),
            ],
            [
                'ID' => 20,
                'NAME' => 'Ida',
                'LAST_NAME' => 'Buczko',
                'JOB_POSITION' => 'Specjalista ds. IT',
                'EMAIL' => 'iszostak@interia.pl',
                'PHONE_NUMBER' => '737 557 856',
                'PASSWORD' => Hash::make('n#6#9B5k#8RwE'),
            ],
        ];

        // Insert data into the database
        foreach ($employees as $employee) {
            Employees::create($employee);
        }

        $this->command->info('Records were successfully added to the database. Seeders are correct.');
    }
}
