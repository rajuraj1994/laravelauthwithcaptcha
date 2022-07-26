<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userValidation extends FormRequest
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
            'name'=>'required|min:2',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|confirmed',
            // 'confirmation_password'=>'confirmed',
            'g-recaptcha-response' => 'required|captcha'
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'name is required',
            'name.min'=>'name must be minimum of 2 characters',
            'email.required'=>'email is required',
            'email.email'=>'invalid email',
            'email.unique'=>'this email is already taken',
            'password.required'=>'passsword is required',
            'password.min'=>'password must be more than 8 character',
            'g-recaptcha-response.required'=>'please verify to checked if you are not a robot',
            'g-recaptcha-response.captcha'=>'not a valid captcha'
        ];
    }
}
