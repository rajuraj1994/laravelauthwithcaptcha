<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginValidation extends FormRequest
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
            
            'email'=>'required|email',
            'password'=>'required',
            'password_confirmation'=>'confirmed',
            'g-recaptcha-response' => 'required|captcha'
        ];
    }
    public function messages()
    {
        return[
            'email.required'=>'email is required',
            'email.email'=>'invalid email',
            'password.required'=>'passsword is required',
            'g-recaptcha-response.required'=>'please verify to checked if you are not a robot',
            'g-recaptcha-response.captcha'=>'not a valid captcha'
        ];
    }
}
