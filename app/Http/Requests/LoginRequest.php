<?php

namespace App\Http\Requests;
use App\Http\Requests\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
      public function rules()
    {
        return [
            'email' => 'required|string|email|max:255|email',
            'password' => 'required|string|min:8'

        ];
    }
}