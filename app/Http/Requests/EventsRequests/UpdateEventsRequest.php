<?php

namespace App\Http\Requests\EventsRequests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'event_name' => 'min:3|max:30',
            'event_description' => 'min:3|max:30',
            'event_date' => 'min:3|max:30',
            'event_location' => 'min:3|max:30'
        ];
    }
}
