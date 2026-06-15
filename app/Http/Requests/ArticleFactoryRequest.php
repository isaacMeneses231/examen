<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ArticleFactoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'factory_id' => 'required|exists:factories,id',
            'article_id' => 'required|exists:articles,id',
            'current_stock' => 'required|integer',
            'negotiated_supplier_cost' => 'required|numeric',
            'estimated_delivery_time' => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'factory_id.required' => 'La fábrica es requerida',
            'factory_id.exists' => 'La fábrica seleccionada no existe',
            'article_id.required' => 'El artículo es requerido',
            'article_id.exists' => 'El artículo seleccionado no existe',
            'current_stock.required' => 'Las existencias actuales son requeridas',
            'current_stock.integer' => 'Las existencias deben ser un número entero',
            'negotiated_supplier_cost.required' => 'El costo negociado es requerido',
            'negotiated_supplier_cost.numeric' => 'El costo debe ser un número',
            'estimated_delivery_time.required' => 'El tiempo estimado de entrega es requerido',
            'estimated_delivery_time.integer' => 'El tiempo debe ser un número entero',
        ];
    }
}