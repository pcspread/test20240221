<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'number' => ['required','integer'],
            'date' => ['required'],
            'title' => ['required', 'string', 'max:50'],
            'content' => ['required', 'string', 'max:100'],
        ];
    }

    /**
     * バリデーションメッセージの修正
     * @param void
     * @return array
     */
    public function messages()
    {
        return [
            'number.required' => 'テスト番号を入力してください',
            'number.integer' => 'テスト番号は数値で入力してください',
            'date.required' => 'テスト日を選択してください',
            'title.required' => 'テスト名を入力してください',
            'title.string' => 'テスト名は文字列で入力してください',
            'title.max' => 'テスト名は50文字以内で入力してください',
            'content.required' => 'テスト内容を入力してください',
            'content.string' => 'テスト内容は文字列で入力してください',
            'content.max' => 'テスト内容は100文字以内で入力してください',
        ];
    }
}
