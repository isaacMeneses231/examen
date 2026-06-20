<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ShippingAddressRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'client_id' => 'required|exists:clients,id',
            'number' => 'required|integer',
            'street' => 'required|string|max:255',
            'neighborhood' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'location_reference' => 'nullable|string|max:255',
            'address_status' => 'required|string|max:255',
            
        ];
    }

    public function messages(): array
    {
        return [
            'client_id.required' => 'El cliente es requerido',
            'client_id.exists' => 'El cliente seleccionado no existe',
            'number.required' => 'El número es requerido',
            'number.integer' => 'El número debe ser un valor entero',
            'street.required' => 'La calle es requerida',
            'neighborhood.required' => 'El barrio es requerido',
            'city.required' => 'La ciudad es requerida',
            'location_reference.max' => 'La referencia debe tener menos de 255 caracteres',
            'address_status.required' => 'El estado de la dirección es requerido',
            
        ];
    }
}