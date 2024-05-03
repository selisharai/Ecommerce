<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'category_id', 'subcategory_id', 'brand_id', 'price', 'discount'];

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }

    public function subcategory()
    {
        return $this->belongsTo(category::class, 'subcategory_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(category::class, 'brand_id', 'id');
    }
}
