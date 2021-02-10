<?php

namespace App\Http\Requests\Guest;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Redirect route when errors occur.
     *  
     * @var string
     */
    protected $redirectRoute = 'guest.register';

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
            'name'     => ['required', 'min:3', 'max:16', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed']
        ];
    }
}
