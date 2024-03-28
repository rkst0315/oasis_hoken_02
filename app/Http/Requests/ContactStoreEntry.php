<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreEntry extends FormRequest
{
    protected $redirect = '/contact';


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

            'tel_1' => 'required|min:10|max:11',
            'email' => 'required|email',
            'privacy' => 'required',
            'contact_message' => 'required|string',
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


            'tel_1.required' => '電話番号をご入力ください',
            'tel_1.min' => '電話番号が正しくありません',
            'tel_1.max' => '電話番号が正しくありません',
            'email.required' => 'メールアドレスをご入力ください',
            'email.email' => 'メールアドレスが正しくありません',

            'privacy.required' => 'チェックを入れてください',
            'contact_message.required' => 'お問い合わせ内容をご入力ください',
        ];
    }
}
