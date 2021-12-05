<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubcategoryProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        // To do
    ];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
