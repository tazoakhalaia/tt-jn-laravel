<?php

namespace App\Http\Requests\ToursRequests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateToursRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'nullable|string',
            'description' => 'nullable|string',
            'tour_guide' => 'nullable|string',
            'duration' => 'nullable|integer',
            'max_group_size' => 'nullable|integer',
            'difficulty' => 'nullable|in:Easy,Medium,Difficult',
            'ratings_average' => 'nullable|integer',
            'ratings_quantity' => 'nullable|integer',
            'price' => 'nullable|string',
            'age_restriction' => 'nullable|integer',
            'stop_location' => 'nullable|string',
            'tour_begin' => 'nullable|string',
            'type' =>  'nullable|string',
            'price_discount' => 'nullable'
        ];
    }
}
