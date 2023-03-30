<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarouselRequest extends FormRequest
{
    public function rules() 
    {
        $rules = [
            'title' => 'required', 
            'filename' => 'required', 
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
