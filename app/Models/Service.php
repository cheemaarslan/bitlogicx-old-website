<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    protected $casts = [
        'meta_keyword' => 'array',
        'meta_tag' => 'array'
    ];

//    public function cards()
//    {
//        return $this->hasMany(Card::class);
//    }

    protected $appends = [
        'short_description',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getServiceImageAttribute()
    {
        return asset('storage/' . $this->attributes['service_image']);
    }
    public function getBannerServiceImageAttribute()
    {
        return asset('storage/' . $this->attributes['banner_service_image']);
    }
    public function getServiceOgImageAttribute()
    {
        return asset('storage/' . $this->attributes['og_image']);
    }
    public function getShortDescriptionAttribute()
    {
        return Str::limit($this->attributes['description']);
    }
}
