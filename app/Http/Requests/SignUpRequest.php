<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|regex:/^[а-яёА-ЯЁ\s-]+$/u',
            'lastname' => 'required|regex:/^[а-яёА-ЯЁ\s-]+$/u',
            'patronymic' => 'nullable|regex:/^[а-яёА-ЯЁ\s-]+$/u',
            'login' => 'required|regex:/^[a-zA-Z\s-]+$/u|unique:users,login',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|same:re_password',
            'rules' => 'accepted',
        ];
    }
}
