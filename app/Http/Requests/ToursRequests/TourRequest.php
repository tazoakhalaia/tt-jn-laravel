<?php

namespace App\Http\Requests\ToursRequests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'tour_guide' => 'required|string',
            'duration' => 'required|integer',
            'max_group_size' => 'required|integer',
            'difficulty' => 'required|in:Easy,Medium,Difficult',
            'ratings_average' => 'required|integer',
            'ratings_quantity' => 'required|integer',
            'price' => 'required|string',
            'age_restriction' => 'nullable|integer',
            'stop_location' => 'required|string',
            'tour_begin' => 'required|string',
            'type' =>  'required|string',
            'price_discount' => 'nullable'
        ];
    }
}
