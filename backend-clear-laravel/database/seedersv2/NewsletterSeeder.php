<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Newsletter;
use Carbon\Carbon;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        /*
         * Define the customer IDs to create subscriptions for
         */
        $klientIds = [1, 5, 7, 15, 20];

        foreach ($klientIds as $klientId) {
            /*
             * Random subscription start date in the past
             */
            $randomDate = Carbon::now()->subDays(rand(0, 365))->format('Y-m-d H:i:s');

            Newsletter::create([
                'ID_KLIENTA' => $klientId,
                'POCZATEK_SUBSKRYPCJI' => $randomDate,
                'STATUS_SUBSKRYPCJI' => 'aktywna',
            ]);
        }

        $this->command->info('Newsletter subscriptions have been created for specified clients.');
    }
}
