<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmaciesTable extends Migration
{
    public function up() 
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id();
            $table->string('name');      
            $table->text('address');   
            $table->timestamps();   
        });
    }
    
    public function down() 
    {
       Schema::dropIfExists('pharmacies'); 
    }
}