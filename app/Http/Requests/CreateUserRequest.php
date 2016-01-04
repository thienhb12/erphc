<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request {

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
            'first_name' => 'required|min:3|max:255',
            'username'   => 'required|unique:users',
            'password'   => 'required|confirmed',
            'phone'      => 'required|integer',
            'email'      => 'required|email|min:3|unique:users',
            'payroll'    => 'required|integer|min:3|max:255',
            'profits'    => 'required|integer|min:3|max:255',      
        ];
    }

}
