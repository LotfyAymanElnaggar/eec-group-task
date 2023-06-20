<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPharmacyTable extends Migration 
{
    public function up() 
    {
        Schema::create('product_pharmacy', function (Blueprint $table) {
            $table->id();     
            $table->unsignedBigInteger('product_id');     
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');    
            $table->unsignedBigInteger('pharmacy_id');     
            $table->foreign('pharmacy_id')->references('id')->on('pharmacies')->onDelete('cascade');
            $table->integer('price')->nullable();  
            $table->timestamps();
       });
    }
    
    public function down() 
    {
        Schema::dropIfExists('product_pharmacy');
    }
}