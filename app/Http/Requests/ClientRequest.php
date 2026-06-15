<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|string|max:255',
            'balance' => 'required|numeric',
            'credit_limit' => 'required|numeric',
            'discount' => 'required|numeric',
            'registration_date' => 'required|date',
            'client_status' => 'required|string|max:20',
        ];
    }

    public function messages(): array
    {
        return [
            'full_name.required' => 'El nombre completo es requerido',
            'full_name.string' => 'El nombre completo debe ser una cadena de texto',
            'full_name.max' => 'El nombre completo debe tener menos de 255 caracteres',
            'email.required' => 'El correo electrónico es requerido',
            'email.email' => 'Debe ingresar un correo electrónico válido',
            'phone_number.required' => 'El número de teléfono es requerido',
            'balance.required' => 'El saldo es requerido',
            'balance.numeric' => 'El saldo debe ser un número',
            'credit_limit.required' => 'El límite de crédito es requerido',
            'credit_limit.numeric' => 'El límite de crédito debe ser un número',
            'discount.required' => 'El descuento es requerido',
            'discount.numeric' => 'El descuento debe ser un número',
            'registration_date.required' => 'La fecha de registro es requerida',
            'registration_date.date' => 'Debe ser una fecha válida',
            'client_status.required' => 'El estado del cliente es requerido',
            'client_status.max' => 'El estado debe tener menos de 20 caracteres',
        ];
    }
}