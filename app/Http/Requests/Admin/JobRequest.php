<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'name' => 'required',
            'payment' => 'required',
            'schedule' => 'required',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязателено к заполнению',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Название',
            'payment' => 'Зарплата',
            'schedule' => 'График',
            'description' => 'Описание'
        ];
    }
}
