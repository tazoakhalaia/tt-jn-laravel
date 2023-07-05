<?php

namespace App\Http\Requests\HotelsRequests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHotelsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'hotel_name' => 'min:2|max:30',
            'hotel_location' => 'min:2|max:30',
            'hotel_description' => 'min:2|max:30',
            'hotel_host_number' => 'min:2|max:30',
            'hotel_rooms' => 'min:2|max:30',
            'hot_water' => 'nullable',
            'heating' => 'nullable',
            'internet' => 'nullable',
            'air_condition' => 'nullable',
            'closet' => 'nullable',
            'tv' => 'nullable',
            'garden' => 'nullable',
            'car_parking' => 'nullable',
            'type' => 'in:Guesthouse,Cottage,Hotel',
            'view' => 'min:2|max:30',
            'pet_friendly' => 'nullable',
            'available_time' => 'min:2|max:30',
            'price_daily' => 'nullable',
            'price_monthly' => 'nullable',
            'discount' => 'nullable',
            'currency' => 'in:USD,GEL,GBP,EUR',
        ];
    }
}
