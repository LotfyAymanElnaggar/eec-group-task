<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image', 'price', 'quantity'];

    public function pharmacies()
    {
        return $this->belongsToMany(Pharmacy::class, 'product_pharmacy', 'product_id', 'pharmacy_id')
            ->withPivot('price');
    }
}
