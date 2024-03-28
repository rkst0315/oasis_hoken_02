<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntry extends FormRequest
{
    protected $redirect = '/';
    // protected $redirect = '/form';

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
            'name_sei' => 'required',
            'name_mei' => 'required',
            'name_sei_kana' => 'required',
            'name_mei_kana' => 'required',

            'birthday_year' => 'required',
            'birthday_month' => 'required',
            'birthday_day' => 'required',

            'zipcode_1' => 'required|regex:/^[0-9]{7}$/',
            'pref' => 'required',
            'address_1' => 'required',
            'address_2' => 'required',
            // 'address_3' => 'required',

            'tel_1' => 'required|min:10|max:11',
            'email' => 'required|email',

            'birthday_child_year' => 'required',
            'birthday_child_month' => 'required',
            'birthday_child_day' => 'required',

            'privacy' => 'required',
        ];
    }

    public function messages()
    {
        return [
            //
            'name_sei.required' => '姓をご入力ください',
            'name_mei.required' => '名をご入力ください',
            'name_sei_kana.required' => 'セイをご入力ください',
            'name_mei_kana.required' => 'メイをご入力ください',


            'birthday_year.required' => '年をご入力ください',
            'birthday_month.required' => '月をご入力ください',
            'birthday_day.required' => '日をご入力ください',

            'zipcode_1.required' => '郵便番号をご入力ください',
            'zipcode_1.regex' => '7桁の数字をご入力ください',

            'pref.required' => '都道府県をご入力ください',
            'address_1.required' => '市区町村をご入力ください',
            'address_2.required' => '番地をご入力ください',
            // 'address_3.required' => '建物・マンション・表札名をご入力ください',

            'tel_1.required' => '電話番号をご入力ください',
            'tel_1.min' => '電話番号が正しくありません',
            'tel_1.max' => '電話番号が正しくありません',
            'email.required' => 'メールアドレスをご入力ください',
            'email.email' => 'メールアドレスが正しくありません',

            'birthday_child_year.required' => '年をご入力ください',
            'birthday_child_month.required' => '月をご入力ください',
            'birthday_child_day.required' => '日をご入力ください',


            'privacy.required' => 'チェックを入れてください',
        ];
    }
}
