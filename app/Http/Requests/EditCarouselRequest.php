<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCarouselRequest extends FormRequest
{
    public function rules() 
    {
        $rules = [
            'title' => 'required', 
            'filename' => 'nullable', 
        ];

        return $rules;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return [
            'required' => 'Field is required', 
        ];
    }
}
