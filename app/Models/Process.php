<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Process extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function getShortDescriptionAttribute()
    {
        return Str::limit($this->attributes['description'], 20, '...');
    }
    public function getProcessImageAttribute()
    {
        return asset('storage/'.$this->attributes['process_image']);
    }
}
