<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderLineRequest;
use App\Models\OrderLine;
use App\Models\Order;
use App\Models\ArticleFactory;
use App\Models\Article; 

class OrderLineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order_lines = OrderLine::with(['order'])->orderByDesc('id')->get();
        return view('order_lines.index', compact('order_lines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $order_line = new OrderLine();
        $orders = Order::all();
        $article_factories = ArticleFactory::all();
        // Agregamos la variable que faltaba
        $articles = Article::all(); 
        
        // La incluimos en el compact
        return view('order_lines.create', compact('order_line', 'orders', 'article_factories', 'articles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderLineRequest $request)
    {
        OrderLine::create($request->validated());
        return redirect()->route('order_lines.index')->with('success', 'Línea de pedido creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order_line = OrderLine::with(['order'])->findOrFail($id);
        return view('order_lines.show', compact('order_line'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order_line = OrderLine::with(['order'])->findOrFail($id);
        $orders = Order::all();
        $article_factories = ArticleFactory::all();
        // Agregamos la variable que faltaba también en edición
        $articles = Article::all(); 
        
        // La incluimos en el compact
        return view('order_lines.edit', compact('order_line', 'orders', 'article_factories', 'articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrderLineRequest $request, string $id)
    {
        $order_line = OrderLine::with(['order'])->findOrFail($id);
        $order_line->update($request->validated());
        return redirect()->route('order_lines.index')->with('success', 'Línea de pedido actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order_line = OrderLine::with(['order'])->findOrFail($id);
        $order_line->delete();
        return redirect()->route('order_lines.index')->with('success', 'Línea de pedido eliminada correctamente');
    }
}