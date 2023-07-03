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
            'hot_water' => 'required',
            'heating' => 'required',
            'internet' => 'required',
            'air_condition' => 'required',
            'closet' => 'required',
            'tv' => 'required',
            'garden' => 'required',
            'car_parking' => 'required',
            'type' => 'required|in:Guesthouse,Cottage,Hotel',
            'view' => 'required|min:2|max:30',
            'pet_friendly' => 'required',
            'available_time' => 'required|min:2|max:30',
            'price_daily' => 'required',
            'price_monthly' => 'nullable',
            'discount' => 'nullable',
            'currency' => 'required|in:USD,GEL,GBP,EUR',
            'user_id' => 'required|exists:users,id'
        ];
    }
}
