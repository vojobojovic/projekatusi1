<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\Appointment;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // 1. Korisnici Sistema (Dodato za Admin panel)
        User::create([
            'name' => 'admin',
            'email' => 'admin@raf.rs',
            'password' => Hash::make('lozinka123'),
        ]);

        User::create([
            'name' => 'Vojo',
            'email' => 'vbojovic2223it@raf.rs',
            'password' => Hash::make('lozinka123'),
        ]);

        // 2. Kategorije (Tvoj original)
        $haljine = Category::create(['name' => 'Haljine']);
        $pantalone = Category::create(['name' => 'Pantalone']);
        $odela = Category::create(['name' => 'Odela']);
        $majice = Category::create(['name' => 'Majice i Šorcevi']);

        // 3. Proizvodi sa opisima (Tvoj original)
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

        // 4. Porudžbine Kupaca (5 primera prema tvojoj bazi)
        $orders = [
            ['customer_name' => 'Zorica Bojovic', 'product_name' => 'Svilena haljina Wolley', 'quantity' => 1, 'price' => 12500, 'status' => 'Na čekanju'],
            ['customer_name' => 'Marko Markovic', 'product_name' => 'Lanene pantalone (sive)', 'quantity' => 2, 'price' => 9600, 'status' => 'Plaćeno'],
            ['customer_name' => 'Jelena Jelic', 'product_name' => 'Svečana balska haljina', 'quantity' => 1, 'price' => 45000, 'status' => 'U obradi'],
            ['customer_name' => 'Nikola Nikolic', 'product_name' => 'Muško odelo po meri', 'quantity' => 1, 'price' => 28000, 'status' => 'Završeno'],
            ['customer_name' => 'Milica Milic', 'product_name' => 'Letnja majica - pamuk', 'quantity' => 3, 'price' => 6600, 'status' => 'Na čekanju'],
        ];

        foreach ($orders as $orderData) {
            Order::create($orderData);
        }

        // 5. Termini (BEZ kolone status da ne bi pucalo!)
        Appointment::create([
            'customer_name' => 'Zorica Bojovic',
            'service_type' => 'Sivenje po meri',
            'appointment_date' => '2004-02-04 05:22:00'
        ]);


    }
}
