<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestKeyword extends FormRequest
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
            'k_name' => 'required|max:255|min:3|unique:keywords,k_name,' . $this->id
        ];
    }

    public function messages()
    {
        return [
            'k_name.required'   => 'Data not be empty',
            'k_name.unique'     => 'Data already exists',
            'k_name.max'        => 'Data no more than 255',
            'k_name.min'        => 'Data no less than 3'


        ];
    }
}
