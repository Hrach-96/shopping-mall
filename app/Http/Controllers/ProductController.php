<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index(){
        return Products::with(['categoryInfo'])->get();
    }

    public function getById($id){
    	$prod = Products::with(['categoryInfo'])->inRandomOrder()->first();
       	return $prod;
    }

    public function store(){
    	$data = getData();
       	return Products::create($data);
    }

    public function update($id){
    	// as test taking like this
    	$id = Products::inRandomOrder()->first()->id;
    	$data = getData();
    	$product = Products::whereId($id)->first();
    	$product->update($data);
    	return $product;
    }
    
    public function delete($id){
    	// as test taking like this
    	$id = Products::inRandomOrder()->first()->id;
       	Products::destroy($id);
       	return true;
    }
}
