<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // 1. Kategorije
        $haljine = Category::create(['name' => 'Haljine']);
        $pantalone = Category::create(['name' => 'Pantalone']);
        $odela = Category::create(['name' => 'Odela']);
        $majice = Category::create(['name' => 'Majice i Šorcevi']);

        // 2. Proizvodi sa opisima
        Product::create([
            'name' => 'Svilena haljina Wolley',
            'price' => 12500,
            'description' => 'Elegantna haljina od prirodne svile, šivena po meri.',
            'category_id' => $haljine->id
        ]);

        Product::create([
            'name' => 'Lanene pantalone (sive)',
            'price' => 4800,
            'description' => 'Lagane letnje pantalone od lana.',
            'category_id' => $pantalone->id
        ]);

        Product::create([
            'name' => 'Muško odelo po meri',
            'price' => 28000,
            'description' => 'Vrhunski kroj, italijanski materijal.',
            'category_id' => $odela->id
        ]);

        Product::create([
            'name' => 'Letnja majica - pamuk',
            'price' => 2200,
            'description' => '100% pamuk sa unikatnim Wolley printom.',
            'category_id' => $majice->id
        ]);

        Product::create([
            'name' => 'Šorc za plažu',
            'price' => 3100,
            'description' => 'Brzosušeći materijal, moderan kroj.',
            'category_id' => $majice->id
        ]);

        Product::create([
            'name' => 'Svečana balska haljina',
            'price' => 45000,
            'description' => 'Unikatan rad sa kristalima i tilom.',
            'category_id' => $haljine->id
        ]);
    }
}
