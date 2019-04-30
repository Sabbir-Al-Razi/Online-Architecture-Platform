<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddArchi extends FormRequest
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
            //
            'Name' => 'required',
            'Username' => 'required',
            'Email' => 'required',
            'Password' => 'required',
            'Mobile' => 'required',
            'Address' => 'required'
        ];
    }

    public function messages()
    {
        return [
            //
            'Name.required' => 'Name is empty',
            'Username.required' => 'Username is empty',
            'Email.required' => 'Email is empty',
            'Password.required' => 'Password is empty',
            'Mobile.required' => 'Mobile is empty',
            'Address.required' => 'Address is empty'
        ];
    }
}
