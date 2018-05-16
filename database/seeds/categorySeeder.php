<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
      ['category_name' => 'Fruit'],
      ['category_name' => 'Groenten'],
      ['category_name' => 'Games'],
      ['category_name' => 'Persona'],
      ['category_name' => 'Boeken']
    ]);
    }
}
