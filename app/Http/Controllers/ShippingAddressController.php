<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShippingAddressRequest;
use App\Models\ShippingAddress;
use App\Models\Client;

class ShippingAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shipping_addresses = ShippingAddress::with('client')->orderByDesc('id')->get();
        return view('shipping_addresses.index', compact('shipping_addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $shipping_address = new ShippingAddress();
        $clients = Client::all();
        
        return view('shipping_addresses.create', compact('shipping_address', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShippingAddressRequest $request)
    {
        ShippingAddress::create($request->validated());
        return redirect()->route('shipping_addresses.index')->with('success', 'Dirección de envío creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $shipping_address = ShippingAddress::with('client')->findOrFail($id);
        return view('shipping_addresses.show', compact('shipping_address'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $shipping_address = ShippingAddress::with('client')->findOrFail($id);
        $clients = Client::all();
        
        return view('shipping_addresses.edit', compact('shipping_address', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ShippingAddressRequest $request, string $id)
    {
        $shipping_address = ShippingAddress::with('client')->findOrFail($id);
        $shipping_address->update($request->validated());
        return redirect()->route('shipping_addresses.index')->with('success', 'Dirección de envío actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shipping_address = ShippingAddress::with('client')->findOrFail($id);
        $shipping_address->delete();
        return redirect()->route('shipping_addresses.index')->with('success', 'Dirección de envío eliminada correctamente');
    }
}