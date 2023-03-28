<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules() 
    {//
        $rules = [
            'category' => 'required', 
            'title' => 'required', 
            'tags' => 'required', 
            'credit' => 'required',
            'description' => 'required', 
            'price' => 'required', 
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
