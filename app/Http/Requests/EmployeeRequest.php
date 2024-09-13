<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'factory_id' => 'required|exists:factories,id',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
        ];
    }
}
