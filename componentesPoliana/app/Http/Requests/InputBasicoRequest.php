<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InputBasicoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'userName' => ['required','string'],
            'senha' => ['required', 'min:8', 'max:15']
        ];
    }

    public function messages(): array
    {
        return [
            'userName.required' => 'O nome é obrigatório.',
            'senha.required' => 'A senha é obrigatória.',
            'senha.min' => 'A senha deve ter no mínimo 8 caracteres.',
            'senha.max' => 'A senha deve ter no máximo 15 caracteres.'
        ];
    }




}
