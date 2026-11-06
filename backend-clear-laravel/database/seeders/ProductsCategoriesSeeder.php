<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ProductsCategories;

class ProductsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $productCategories = [
            [1, 1], [2, 2], [3, 1], [4, 3], [5, 2], [6, 1], [7, 3], [8, 1], [9, 2], [10, 14],
            [11, 15], [12, 13], [13, 13], [14, 15], [15, 14], [16, 15], [17, 14], [18, 13], [19, 13], [20, 4],
            [21, 4], [22, 4], [23, 4], [24, 4], [25, 4], [26, 4], [27, 4], [28, 4], [29, 5], [30, 5],
            [31, 5], [32, 5], [33, 5], [34, 5], [35, 5], [36, 5], [37, 5], [38, 5], [39, 6], [40, 6],
            [41, 6], [42, 6], [43, 6], [44, 6], [45, 6], [46, 6], [47, 6], [48, 7], [49, 7], [50, 7],
            [51, 7], [52, 7], [53, 7], [54, 7], [55, 7], [56, 7], [57, 8], [58, 8], [59, 8], [60, 8],
            [61, 8], [62, 8], [63, 8], [64, 8], [65, 8], [66, 8], [67, 9], [68, 9], [69, 9], [70, 9],
            [71, 9], [72, 9], [73, 9], [74, 9], [75, 9], [76, 9], [77, 10], [78, 10], [79, 10], [80, 10],
            [81, 10], [82, 10], [83, 10], [84, 10], [85, 10], [86, 10], [87, 11], [88, 11], [89, 11], [90, 11],
            [91, 11], [92, 11], [93, 11], [94, 11], [95, 11], [96, 12], [97, 12], [98, 12], [99, 12], [100, 12],
            [101, 12], [102, 12], [103, 12], [104, 12], [105, 12],
        ];

        foreach ($productCategories as $productCategory) {
            DB::table('products_categories')->insert([
                'PRODUCTS_ID' => $productCategory[0],
                'CATEGORY_ID' => $productCategory[1],
            ]);
        }
        $this->command->info('Records were successfully added to the database. Seeders are correct.');
    }
}