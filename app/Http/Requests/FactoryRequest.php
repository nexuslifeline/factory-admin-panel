<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FactoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'factory_name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'website' => 'nullable|url|max:255',
        ];
    }
}
