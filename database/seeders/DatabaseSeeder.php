<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Prvo pravimo 5 kategorija
        Category::factory(5)->create();

        // Zatim pravimo 15 proizvoda
        Product::factory(15)->create();
    }
}
