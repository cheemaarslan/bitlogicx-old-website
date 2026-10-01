<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
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
    public function getBlogImageAttribute()
    {
        return asset('storage/' . $this->attributes['blog_image']);
    }
    public function getAuthorImageAttribute()
    {
        return asset('storage/' . $this->attributes['author_image']);
    }
    public function getBlogOgImageAttribute()
    {
        return asset('storage/' . $this->attributes['og_image']);
    }
    public function getShortDescriptionAttribute()
    {
        return Str::limit($this->attributes['description']);
    }
}
