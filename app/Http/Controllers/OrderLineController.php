<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderLineRequest;
use App\Models\OrderLine;
use App\Models\Order;
use App\Models\ArticleFactory;

class OrderLineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderLines = OrderLine::with(['order'])->orderByDesc('id')->get();
        return view('order_lines.index', compact('orderLines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orderLine = new OrderLine();
        $orders = Order::all();
        $articleFactories = ArticleFactory::all();
        
        return view('order_lines.create', compact('orderLine', 'orders', 'articleFactories'));
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
        $orderLine = OrderLine::with(['order'])->findOrFail($id);
        return view('order_lines.show', compact('orderLine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $orderLine = OrderLine::with(['order'])->findOrFail($id);
        $orders = Order::all();
        $articleFactories = ArticleFactory::all();
        
        return view('order_lines.edit', compact('orderLine', 'orders', 'articleFactories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrderLineRequest $request, string $id)
    {
        $orderLine = OrderLine::with(['order'])->findOrFail($id);
        $orderLine->update($request->validated());
        return redirect()->route('order_lines.index')->with('success', 'Línea de pedido actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $orderLine = OrderLine::with(['order'])->findOrFail($id);
        $orderLine->delete();
        return redirect()->route('order_lines.index')->with('success', 'Línea de pedido eliminada correctamente');
    }
}