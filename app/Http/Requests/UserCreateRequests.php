<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;

class UserCreateRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Name không được để trống!',
            'email.required' => 'Email không được để trống!',
            'password.required' => 'Password không được để trống!',
        ];
    }
    
}
