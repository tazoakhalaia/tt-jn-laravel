<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable = ['event_name', 'event_description', 'event_date', 'event_location', 'duration'];

    public function scopeFilterByLocationName(object $query, string $locationName)
    {
        return $query->where('event_location', $locationName);
    }

    public function scopeOrderByPrice(object $query, string $sort = 'asc')
    {
        return $query->orderBy('price', $sort);
    }
    
}
