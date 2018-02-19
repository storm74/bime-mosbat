<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required',
            'role'=>'required',
            'password'=>'required'
        ];
    }
	public function messages()
	{

		return [
			'name.required'=>'لطفا نام و نام خانوادگی خود را وارد کنید',
			'email.required'=>'لطفا ایمیل خود را وارد کنید',
			'role.required'=>'لطفا سطح کاربری، کاربر جدید را انتخاب نمایید',
			'password.required'=>'لطفا فیلد پسورد را پر کنید'
		];
	}
}
