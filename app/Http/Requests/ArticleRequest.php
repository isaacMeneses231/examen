<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'internal_code' => 'required|string|max:50',
            'detailed_description' => 'required|string|max:255',
            'sale_price' => 'required|numeric',
            'purchase_cost' => 'required|numeric',
            'availability_status' => 'required|string|max:20',
            'entry_date' => 'required|date',
        ];
    }

    public function messages(): array
    {
        return [
            'internal_code.required' => 'El código interno es requerido',
            'internal_code.max' => 'El código debe tener menos de 50 caracteres',
            'detailed_description.required' => 'La descripción detallada es requerida',
            'sale_price.required' => 'El precio de venta actual es requerido',
            'sale_price.numeric' => 'El precio debe ser un número',
            'purchase_cost.required' => 'El costo de compra promedio es requerido',
            'purchase_cost.numeric' => 'El costo debe ser un número',
            'availability_status.required' => 'El estado de disponibilidad es requerido',
            'entry_date.required' => 'La fecha de ingreso es requerida',
            'entry_date.date' => 'Debe ser una fecha válida',
        ];
    }
}