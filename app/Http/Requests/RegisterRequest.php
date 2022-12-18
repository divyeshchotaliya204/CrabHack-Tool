<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'firm_size' => 'required|not_in:0',
            'agreed' => 'accepted'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Please enter a first name',
            'last_name.required' => 'Please enter a last name',
            'email.required' => 'Please enter a e-mail address',
            'email.email' => 'Please enter valid e-mail address',
            'password.required' => 'Please choose a password with minimum length of 6 characters',
            'firm_size' => 'Please select a firm size',
            'agreed.accepted' => 'Please accept our Terms of Use and Privacy Policy'
        ];
    }
}
