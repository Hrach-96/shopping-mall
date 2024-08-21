<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = array(
            array('title' => 'Product 1','description'=>'description 1','sku'=> random_string(8),'price'=>'17','category_id'=>1),
            array('title' => 'Product 2','description'=>'description 2','sku'=> random_string(8),'price'=>'11','category_id'=>1),
            array('title' => 'Product 3','description'=>'description 3','sku'=> random_string(8),'price'=>'14','category_id'=>1),
            array('title' => 'Product 4','description'=>'description 4','sku'=> random_string(8),'price'=>'23','category_id'=>2),
            array('title' => 'Product 5','description'=>'description 5','sku'=> random_string(8),'price'=>'36','category_id'=>2),
            array('title' => 'Product 6','description'=>'description 6','sku'=> random_string(8),'price'=>'16','category_id'=>2),
          );
        Products::insert($categories);
    }
}
