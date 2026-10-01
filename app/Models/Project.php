<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
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

    public function getProjectImageAttribute()
    {
        return asset('storage/'.$this->attributes['project_image']);
    }
    public function getBannerProjectImageAttribute()
    {
        return asset('storage/' . $this->attributes['banner_project_image']);
    }
    public function getProjectOgImageAttribute()
    {
        return asset('storage/' . $this->attributes['og_image']);
    }
    public function getShortDescriptionAttribute()
    {
        return Str::limit($this->attributes['description']);
    }
}
