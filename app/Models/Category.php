<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Fillable fields for mass assignment
    protected $fillable = [
        'name',        // The name of the category
        'description', // The description of the category (optional)
        'is_active',   // Status to indicate if the category is active
    ];

    // Optionally, you can define relationships if needed
    // For example, if you have a Product model associated with categories:
    // public function products()
    // {
    //     return $this->hasMany(Product::class);
    // }
}
