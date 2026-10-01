<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name', 'slug'];

    /**
     * The `products` relationship.
     * A category has many products.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
