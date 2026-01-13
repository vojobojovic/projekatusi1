<?php

namespace Database\Seeders;

use App\Models\CategoryProductUserOrder;
use Illuminate\Database\Seeder;

class CategoryProductUserOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryProductUserOrder::factory()->count(5)->create();
    }
}
