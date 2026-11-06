<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::truncate();

        Categories::insert([
            [
                'ID' => 1,
                'CATEGORY_NAME' => 'computers.index',
                'DESCRIPTION' => 'gaming',
            ],
            [
                'ID' => 2,
                'CATEGORY_NAME' => 'computers.index',
                'DESCRIPTION' => 'learning',
            ],
            [
                'ID' => 3,
                'CATEGORY_NAME' => 'computers.index',
                'DESCRIPTION' => 'office',
            ],
            [
                'ID' => 4,
                'CATEGORY_NAME' => 'components.index',
                'DESCRIPTION' => 'cases',
            ],
            [
                'ID' => 5,
                'CATEGORY_NAME' => 'components.index',
                'DESCRIPTION' => 'cooling',
            ],
            [
                'ID' => 6,
                'CATEGORY_NAME' => 'components.index',
                'DESCRIPTION' => 'disks',
            ],
            [
                'ID' => 7,
                'CATEGORY_NAME' => 'components.index',
                'DESCRIPTION' => 'fans',
            ],
            [
                'ID' => 8,
                'CATEGORY_NAME' => 'components.index',
                'DESCRIPTION' => 'graphics',
            ],
            [
                'ID' => 9,
                'CATEGORY_NAME' => 'components.index',
                'DESCRIPTION' => 'memoryRam',
            ],
            [
                'ID' => 10,
                'CATEGORY_NAME' => 'components.index',
                'DESCRIPTION' => 'motherboards',
            ],
            [
                'ID' => 11,
                'CATEGORY_NAME' => 'components.index',
                'DESCRIPTION' => 'powerSupply',
            ],
            [
                'ID' => 12,
                'CATEGORY_NAME' => 'components.index',
                'DESCRIPTION' => 'processors',
            ],
            [
                'ID' => 13,
                'CATEGORY_NAME' => 'laptops.index',
                'DESCRIPTION' => 'gaming',
            ],
            [
                'ID' => 14,
                'CATEGORY_NAME' => 'laptops.index',
                'DESCRIPTION' => 'learning',
            ],
            [
                'ID' => 15,
                'CATEGORY_NAME' => 'laptops.index',
                'DESCRIPTION' => 'office',
            ],
        ]);
        $this->command->info('Records were successfully added to the database. Seeders are correct.');
    }
}
