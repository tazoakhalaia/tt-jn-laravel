<?php

namespace App\Http\Requests\HotelsRequests;

use Illuminate\Foundation\Http\FormRequest;

class HotelsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'hotel_name' => 'required|min:2|max:30',
            'hotel_location' => 'required|min:2|max:30',
            'hotel_description' => 'required|min:2|max:30',
            'hotel_host_number' => 'required|min:2|max:30',
            'hotel_rooms' => 'required|min:2|max:30',
            'hot_water' => 'required|min:2|max:30',
            'heating' => 'required|min:2|max:30',
            'internet' => 'required|min:2|max:30',
            'air_condition' => 'required|min:2|max:30',
            'closet' => 'required|min:2|max:30',
            'tv' => 'required|min:2|max:30',
            'garden' => 'required|min:2|max:30',
            'car_parking' => 'required|min:2|max:30',
            'type' => 'required|in:guesthouse,cottage,hotel',
            'view' => 'required|min:2|max:30',
            'pet_friendly' => 'required|min:2|max:30',
            'available_time' => 'required|min:2|max:30',
            'price_daily' => 'required|min:2|max:30',
            'price_monthly' => 'required|min:2|max:30',
            'price_yearly' => 'required|min:2|max:30',
        ];
    }
}
