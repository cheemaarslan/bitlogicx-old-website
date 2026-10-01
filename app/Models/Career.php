<?php

namespace App\Models;

use App\Models\CareerCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Career extends Model
{
    use HasFactory;

    use HasFactory;
    protected $guarded = [
        'id',
    ];
    protected $casts = [
        'meta_keyword' => 'array'
    ];


    /**
     * Get the user that owns the Career
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(CareerCategory::class, 'career_category_id');
    }
}
