<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'client_id' => 'required|exists:clients,id',
            'shipping_address_id' => 'required|exists:shipping_addresses,id',
            'creation_date_time' => 'required|date',
            'subtotal' => 'required|numeric',
            'tax_amount' => 'required|numeric',
            'general_total' => 'required|numeric',
            'additional_notes' => 'nullable|string|max:255',
            'order_status' => 'required|string|max:20',
        ];
    }

    public function messages(): array
    {
        return [
            'client_id.required' => 'El cliente es requerido',
            'client_id.exists' => 'El cliente seleccionado no existe',
            'shipping_address_id.required' => 'La dirección de envío es requerida',
            'shipping_address_id.exists' => 'La dirección seleccionada no existe',
            'creation_date_time.required' => 'La fecha y hora de creación es requerida',
            'creation_date_time.date' => 'Debe ser una fecha y hora válida',
            'subtotal.required' => 'El subtotal es requerido',
            'subtotal.numeric' => 'El subtotal debe ser un número',
            'tax_amount.required' => 'El monto de impuesto es requerido',
            'tax_amount.numeric' => 'El monto de impuesto debe ser un número',
            'general_total.required' => 'El total general es requerido',
            'general_total.numeric' => 'El total debe ser un número',
            'additional_notes.max' => 'Las notas adicionales deben tener menos de 255 caracteres',
            'order_status.required' => 'El estado del pedido es requerido',
        ];
    }
}