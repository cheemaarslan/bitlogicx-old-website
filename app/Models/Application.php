<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    public function career()
    {
        return $this->belongsTo(Career::class, 'career_id');
    }
    public function getTimeAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->timestamp;
    }
    public function getAppliedDateAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d-m-Y');
    }
    // public function getResumeAttribute()
    // {
    //     return public_path('storage/'.$this->attributes['resume']);
    // }
}
