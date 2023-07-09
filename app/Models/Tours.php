<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'tour_guide',
        'duration',
        'max_group_size',
        'difficulty',
        'ratings_average',
        'ratings_quantity',
        'price',
        'price_discount',
        'age_restriction',
        'stop_location',
        'tour_begin',
        'type'
    ];
}
