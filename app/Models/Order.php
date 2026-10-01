<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function getOrderDateAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d/m/y');
    }



}
