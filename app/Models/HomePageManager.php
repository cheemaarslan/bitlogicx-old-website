<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageManager extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function getBannerImageAttribute()
    {
        if($this->attributes['banner_image']){
            return asset('storage/'.$this->attributes['banner_image']);
        }
    }
}
