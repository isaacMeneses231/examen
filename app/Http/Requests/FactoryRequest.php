<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class FactoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'company_name' => 'required|string|max:150',
            'ruc_number' => 'required|string|max:50',
            'contact_phone' => 'required|string|max:20',
            'supplier_email' => 'required|string|email|max:255',
            'physical_address' => 'required|string|max:255',
            'supplier_status' => 'required|string|max:20',
        ];
    }

    public function messages(): array
    {
        return [
            'company_name.required' => 'El nombre de la empresa es requerido',
            'company_name.max' => 'El nombre debe tener menos de 150 caracteres',
            'ruc_number.required' => 'El número de identificación es requerido',
            'contact_phone.required' => 'El teléfono de contacto es requerido',
            'supplier_email.required' => 'El correo del proveedor es requerido',
            'supplier_email.email' => 'Debe ingresar un correo válido',
            'physical_address.required' => 'La dirección física es requerida',
            'supplier_status.required' => 'El estado del proveedor es requerido',
            'supplier_status.max' => 'El estado debe tener menos de 20 caracteres',
        ];
    }
}