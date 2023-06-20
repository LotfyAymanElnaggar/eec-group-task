<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductPharmacy extends Model
{
    use HasFactory;
    
    protected $table = 'product_pharmacy';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class);
    }
}
