<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ArticleFactoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'factory_id' => 'required|exists:factories,id',
            'article_id' => 'required|exists:articles,id',
            'current_stock' => 'required|integer',
            'supplier_cost' => 'required',
            'delivery_time' => 'required|integer',
            
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
            'supplier_cost.required' => 'El costo negociado es requerido',
            'delivery_time.required' => 'El tiempo estimado de entrega es requerido',
            'delivery_time.string' => 'El tiempo debe ser un número',
            
        ];
    }
}