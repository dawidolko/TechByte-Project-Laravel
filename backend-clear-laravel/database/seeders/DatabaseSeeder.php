<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Disable foreign key checks for MySQL
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call([
            CategoriesSeeder::class,
            CustomersSeeder::class,
            EmployeesSeeder::class,
            SaleSeeder::class,
            ProductsSeeder::class,
            OpinionsSeeder::class,
            NewsletterSeeder::class,
            OrdersSeeder::class,
            ComplaintsSeeder::class,
            ShipmentsSeeder::class,
            SpecificationsSeeder::class,
            PhotosProductsSeeder::class,
            OrdersProductsSeeder::class,
            ProductsCategoriesSeeder::class,
        ]);

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
