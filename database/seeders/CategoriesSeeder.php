<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;
use Faker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = array(
            array('title' => 'title 1','description'=>'category description 1'),
            array('title' => 'title 2','description'=>'category description 2'),
            array('title' => 'title 3','description'=>'category description 3'),
            array('title' => 'title 4','description'=>'category description 4'),
          );
        Categories::insert($categories);
    }
}
