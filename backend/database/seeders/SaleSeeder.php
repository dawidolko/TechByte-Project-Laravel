<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Sale;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $promotions = [
            [
                'ID' => 1,
                'DISCOUNT_AMOUNT' => 40.00,
                'START_DATE' => '2024-04-18',
                'END_DATE' => '2025-04-18',
            ],
            [
                'ID' => 2,
                'DISCOUNT_AMOUNT' => 10.00,
                'START_DATE' => '2024-04-19',
                'END_DATE' => '2025-04-19',
            ],
            [
                'ID' => 3,
                'DISCOUNT_AMOUNT' => 36.00,
                'START_DATE' => '2024-04-20',
                'END_DATE' => '2025-04-20',
            ],
            [
                'ID' => 4,
                'DISCOUNT_AMOUNT' => 11.00,
                'START_DATE' => '2024-04-21',
                'END_DATE' => '2025-04-21',
            ],
            [
                'ID' => 5,
                'DISCOUNT_AMOUNT' => 20.00,
                'START_DATE' => '2024-04-22',
                'END_DATE' => '2025-04-22',
            ],
            [
                'ID' => 6,
                'DISCOUNT_AMOUNT' => 20.00,
                'START_DATE' => '2024-04-23',
                'END_DATE' => '2025-04-23',
            ],
            [
                'ID' => 7,
                'DISCOUNT_AMOUNT' => 5.00,
                'START_DATE' => '2024-04-24',
                'END_DATE' => '2025-04-24',
            ],
        ];

        foreach ($promotions as $promotion) {
            DB::table('sale')->insert($promotion);
        }
        $this->command->info('Records were successfully added to the database. Seeders are correct.');
    }
}
