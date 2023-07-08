<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hotels extends Model
{
    use HasFactory;

    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeOrderByPriceDaily(object $query, string $sort = 'asc')
    {
        return $query->orderBy('price_daily', $sort);
    }

    public function scopeFilterByLocationName(object $query, string $locationName)
    {
        return $query->where('hotel_location', $locationName);
    }
    
    protected $fillable = [
        'hotel_name',
        'hotel_location',
        'hotel_description',
        'hotel_host_number',
        'hotel_rooms',
        'hot_water',
        'heating',
        'internet',
        'air_condition',
        'closet',
        'tv',
        'garden',
        'car_parking',
        'type',
        'view',
        'pet_friendly',
        'available_time',
        'price_daily',
        'price_monthly',
        'price_yearly',
        'discount',
        'user_id',
    ];
}
