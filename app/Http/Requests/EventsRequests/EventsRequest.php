<?php

namespace App\Http\Requests\EventsRequests;

use Illuminate\Foundation\Http\FormRequest;

class EventsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'event_name' => 'required|min:3|max:30',
            'event_description' => 'required|min:3|max:30',
            'event_date' => 'required|min:3|max:30',
            'event_location' => 'required|min:3|max:30'
        ];
    }
}
