<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $appends = [
        'short_description',
    ];
    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'meta_keyword' => 'array',
        'meta_tag' => 'array'
    ];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getProductImageAttribute()
    {
        return asset('storage/'.$this->attributes['product_image']);
    }
    public function getBannerProductImageAttribute()
    {
        return asset('storage/' . $this->attributes['banner_product_image']);
    }
    public function getProductOgImageAttribute()
    {
        return asset('storage/' . $this->attributes['og_image']);
    }
    public function getShortDescriptionAttribute()
    {
        return Str::limit($this->attributes['description']);
    }
}
