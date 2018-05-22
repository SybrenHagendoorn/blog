<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
        ['name' => 'Banaan', 'description' => 'Een krom en geel voorwerp', 'price' => '500.00'],
        ['name' => 'Sla', 'description' => 'Een groene bal voor slakken', 'price' => '1.49'],
        ['name' => 'Tomaat', 'description' => 'Jouw kop', 'price' => '0.50'],
        ['name' => 'Destiny 2', 'description' => 'Te verslavend', 'price' => '10.00'],
        ['name' => 'Sybren', 'description' => 'Één of andere slaaf', 'price' => '5.00'],
        ['name' => 'Slaaf', 'description' => 'Sybren', 'price' => '50000.00'],
        ['name' => 'Fortnite', 'description' => 'Te verslavend voor Sybren', 'price' => '30.00'],
        ['name' => 'harry potter', 'description' => 'tovernaar', 'price' => '9.99'],
        ['name' => 'harry potter2', 'description' => 'tovernaar met update voor jou', 'price' => '19.99']
      ]);
    }
}
