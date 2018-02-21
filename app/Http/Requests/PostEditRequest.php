<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostEditRequest extends FormRequest
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
			'title'=>'required',
//			'content'=>'required',
			'discription'=>'required',
//			'photo_id'=>'required'
		];
	}
	public function messages()
	{

		return [
			'title.required'=>'لطفا عنوان نوشته را انتخاب نمایید',
//			'content.required'=>'لطفا محتوایی ای برای نوشته خود ایجاد نمایید',
			'discription.required'=>'لطفا متن توضیحات نوشته را که در جستجوی گوگل بایگانی می شود را وارد نمایید',
//			'photo_id.required'=>'لطفا تصویری برای نوشته خود انتخاب نمایید',
		];
	}
}
