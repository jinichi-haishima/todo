<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\CategoryController;

class CategoryRequest extends FormRequest
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
            'name'=> [
                'required',
                'string',
                'max:10',
                'unique:Categories,name'
            ]
        ];
    }
    public function messages()
    {
        return[
        'name.required' => 'カテゴリー名を入力してください',
        'name.unique' => 'そのカテゴリーは既に登録されています',
        'name.max' => 'カテゴリー名は20文字以内で入力してください',
        'name.unique' => 'カテゴリが既に存在しています',
        ];
    }
}
