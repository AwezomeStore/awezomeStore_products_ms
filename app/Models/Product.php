<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'stock',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function added_products()
    {
        return $this->hasMany(AddedProduct::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function interactions()
    {
        return $this->hasMany(Interaction::class);
    }

    public function subcategory_products()
    {
        return $this->hasMany(SubcategoryProduct::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
