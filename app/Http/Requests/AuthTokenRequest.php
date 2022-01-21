<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthTokenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Logica quien puede acceder
        return true; // Reglas de acceso
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ];
    }
}
