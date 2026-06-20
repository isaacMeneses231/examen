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
            'internal_code' => 'required|string|max:50|unique:articles,internal_code',
            'detailed_description' => 'required|string|max:255',
            'sale_price' => 'required',
            'purchase_cost' => 'required',
            'availability_status' => 'required|string|max:20',
            'entry_date' => 'required|date',
        ];
    }

    public function messages(): array
    {
        return [
            'internal_code.required' => 'El código interno es requerido',
            'internal_code.max' => 'El código debe tener menos de 50 caracteres',
            'internal_code.unique' => 'Este código interno ya existe en el sistema',
            'detailed_description.required' => 'La descripción detallada es requerida',
            'sale_price.required' => 'El precio de venta actual es requerido',
            'purchase_cost.required' => 'El costo de compra promedio es requerido',
            'availability_status.required' => 'El estado de disponibilidad es requerido',
            'entry_date.required' => 'La fecha de ingreso es requerida',
            'entry_date.date' => 'Debe ser una fecha válida',
        ];
    }
}