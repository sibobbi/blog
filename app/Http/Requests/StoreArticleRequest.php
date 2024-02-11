<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title' => 'required|max:255',
            'author' => 'max:100',
            'brief' => 'required|max:500',
            'body' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Заголовок не может быть пустым',
            'title.max' => 'Длинна заголовка не более 255 символов',
            'author.max' => 'Длинна автора не более 100 символов',
            'brief.required' => 'Бриф не может быть пустым',
            'brief.max' => 'Длинна автора не более 500 символов',
            'body.required' => 'Текст не может быть пустым',
        ];
    }
}
