<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_cost',
    ];

    public function added_products()
    {
        return $this->hasMany(AddedProduct::class);
    }
}
