<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddedProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        // To do
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function shopping_cart()
    {
        return $this->belongsTo(ShoppingCart::class);
    }
}
