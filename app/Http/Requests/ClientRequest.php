<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:clients,email',
            'phone_number' => 'required|string|max:255|unique:clients,phone_number',
            'balance' => 'required',
            'credit_limit' => 'required',
            'discount' => 'required',
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
            'email.unique' => 'Este correo electrónico ya está registrado',
            'phone_number.required' => 'El número de teléfono es requerido',
            'phone_number.unique' => 'Este número de teléfono del cliente ya está registrado.',
            'balance.required' => 'El saldo es requerido',
            'credit_limit.required' => 'El límite de crédito es requerido',
            'discount.required' => 'El descuento es requerido',
            'registration_date.required' => 'La fecha de registro es requerida',
            'registration_date.date' => 'Debe ser una fecha válida',
            'client_status.required' => 'El estado del cliente es requerido',
            'client_status.max' => 'El estado debe tener menos de 20 caracteres',
        ];
    }
}