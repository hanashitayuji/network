<?php

namespace App\Http\Requests\Test;

use Illuminate\Foundation\Http\FormRequest;

class confirmRequest extends FormRequest
{
    /**
     * ユーザーがこのリクエストの権限を持っているかを判断する
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * リクエストに適応されるバリデーションルールを取得
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'max:20'],
            'password' => ['required', 'max:20'],
            'name' => ['required', 'max:20'],
            'tel' => ['regex:/^[0-9-]+$/', 'required', 'max:11'],
            'tel2' => ['required', 'max:11'],
        ];
    }

    /**
     * エラーメッセージの設定
     *
     * @return array
     */
    public function messages(): array {
        return [
            'email.required' => ':attributeを入力してください',
            'email.max' => ':attributeは20文字以内で入力してください',
            'password.required' => ':attributeを入力してください',
            'password.max' => ':attributeは20文字以内で入力してください',
            'name.required' => ':attributeを入力してください',
            'name.max' => ':attributeは11桁以内で入力してください',
            'tel.required' => ':attributeを入力してください',
            'tel.max' => ':attributeは11桁以内で入力してください',
            'tel.regex' => ':attributeは半角数値で入力してください',
            'tel2.required' => ':attributeを入力してください',
            'tel2.max' => ':attributeは11桁以内で入力してください',
        ];
    }

    /**
     * 属性名の設定
     * 
     * @return array
     */
    public function attributes(): array {
        return [
            'email' => 'メールドレス',
            'password' => 'パスワード',
            'name' => '名前',
            'tel' => '電話番号',
            'tel2' => '緊急連絡先',
        ];
    }
}
