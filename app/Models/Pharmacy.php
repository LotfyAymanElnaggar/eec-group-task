<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pharmacy extends Model 
{
    use HasFactory;

    protected $fillable = ['name', 'address'];
    
    public function products() 
    {
        return $this->belongsToMany(Product::class, 'product_pharmacy', 'pharmacy_id', 'product_id')
             ->withPivot('price');        
    } 
}