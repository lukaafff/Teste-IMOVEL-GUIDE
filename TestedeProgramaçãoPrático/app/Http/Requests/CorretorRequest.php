<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CorretorRequest extends FormRequest
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
    public function rules()
{
    return [
        'nome' => [
            'required',
            'string',
            function ($attribute, $value, $fail) {
                if (strtolower($value) === 'andré nunes') {
                    $fail('Usuário está na blacklist. Não é possível realizar o cadastro.');
                }
            },
        ],
        'cpf' => 'required|numeric|digits:11',
        'creci' => 'required|numeric|digits_between:2,8',
    ];
}


    public function messages()
    {
        return [
            'nome.required' => 'Coloque seu nome!',
            'nome.string' => 'O nome deve ser uma palavra.',
            'nome.between' => 'O nome deve ter entre 2 e 20 caracteres.',
            'nome.regex' => 'O nome deve conter apenas letras.',
            'cpf.required' => 'Coloque o CPF!',
            'cpf.numeric' => 'O CPF deve conter apenas números.',
            'cpf.digits' => 'O CPF deve ter 11 dígitos.',
            'creci.required' => 'Coloque o CRECI!',
            'creci.numeric' => 'O CRECI deve conter apenas números.',
            'creci.digits_between' => 'O CRECI deve ter entre 2 e 8 dígitos.',
        ];
    }
}
