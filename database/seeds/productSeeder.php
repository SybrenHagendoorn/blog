<?php

use Illuminate\Database\Seeder;

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
        ['product_name' => 'Banaan', 'product_description' => 'Een krom en geel voorwerp', 'product_price' => '500.00'],
        ['product_name' => 'Sla', 'product_description' => 'Een groene bal voor slakken', 'product_price' => '1.49'],
        ['product_name' => 'Tomaat', 'product_description' => 'Jouw kop', 'product_price' => '0.50'],
        ['product_name' => 'Destiny 2', 'product_description' => 'Te verslavend', 'product_price' => '10.00'],
        ['product_name' => 'Sybren', 'product_description' => 'Één of andere slaaf', 'product_price' => '5.00'],
        ['product_name' => 'Slaaf', 'product_description' => 'Sybren', 'product_price' => '50000.00'],
        ['product_name' => 'Fortnite', 'product_description' => 'Te verslavend voor Sybren', 'product_price' => '30.00']
      ]);
    }
}
