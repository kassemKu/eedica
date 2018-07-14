<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidation extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'الاسم مطلوب .. الرجاء ملئ الحقل',

            'email.required' => 'البريد الالكتروني مطلوب .. الرجاء ملئ الحقل',
            'email.email' => 'أدخل بريدا الكترونيا صالحا',
            'email.unique' => 'هذا البريد الالكتروني مسجل بالفعل',

            'password.required' => 'كلمة المرور مطلوبة... الرجاء ملئ الحقل',
            'password.min' => 'كلمة المرور يجب أن تزيد عن ستة محارف'
        ];
    }
}
