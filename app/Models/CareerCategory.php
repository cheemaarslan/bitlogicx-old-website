<?php

namespace App\Models;

use App\Models\Career;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CareerCategory extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id',
    ];
    /**
     * Get all of the comments for the careerCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function careers()
    {
        return $this->hasMany(Career::class)->where('status', 'Publish');
    }
}
