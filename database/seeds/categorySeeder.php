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
      ['name' => 'Fruit'],
      ['name' => 'Groenten'],
      ['name' => 'Games'],
      ['name' => 'Persona'],
      ['name' => 'Boeken']
    ]);
    }
}
