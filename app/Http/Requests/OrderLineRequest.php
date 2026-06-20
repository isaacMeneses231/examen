<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class OrderLineRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'requested_quantity' => 'required|integer',
            'unit_price' => 'required|numeric',
            'line_subtotal' => 'required|numeric',
            'order_id' => 'required|exists:orders,id',
            'article_id' => 'required|exists:articles,id',
        ];
    }

    public function messages(): array
    {
        return [
            
            'requested_quantity.required' => 'La cantidad solicitada es requerida',
            'requested_quantity.integer' => 'La cantidad debe ser un número entero',
            'unit_price.required' => 'El precio unitario es requerido',
            'unit_price.numeric' => 'El precio unitario debe ser un número',
            'line_subtotal.required' => 'El subtotal de línea es requerido',
            'line_subtotal.numeric' => 'El subtotal debe ser un número',
            'order_id.required' => 'El pedido es requerido',
            'order_id.exists' => 'El pedido seleccionado no existe',
            'article_id.required' => 'El artículo es requerido',
            'article_id.exists' => 'El artículo seleccionado no existe',
        ];
    }
}