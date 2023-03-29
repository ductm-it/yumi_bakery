<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRegister extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|max:255|min:3|unique:users,email,' . $this->id,
            'name' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required'   => 'Data not be empty',
            'name.required'     => 'Data not be empty',
            'phone.required'        => 'Data not be empty',
            'password.required'        => 'Data not be empty'
        ];
    }
}
