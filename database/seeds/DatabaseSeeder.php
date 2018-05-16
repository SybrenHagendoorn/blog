<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          categorySeeder::class,
          productSeeder::class,
          productCategorySeeder::class
      ]);

    /*  $this->call(categorySeeder::class);
        $this->call(productSeeder::class);
        $this->call(productCategoriesSeeder::class);*/
    }
}
