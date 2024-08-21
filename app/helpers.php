<?php
use Illuminate\Support\Str;
use App\Models\Products;

	function getData(){
    	$next_id = rand(1,200);
		return Array(
    		'title'=>'Product '. $next_id,
    		'description'=>'description '. $next_id,
    		'sku'=> random_string(8),
    		'price'=>rand(10,100),
    		'category_id'=>rand(1,2)
    	);
	}
	function random_string($count){
    	$unique = Str::random(8);
    	if(Products::where('sku',$unique)->exists()){
    		random_string(8);
    	}
    	return $unique;
	}
?>