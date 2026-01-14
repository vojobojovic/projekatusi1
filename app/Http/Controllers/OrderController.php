<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Ova funkcija ti fali - ona prikazuje tabelu
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'product_name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        Order::create($request->all());

        return redirect()->route('order.index')->with('success', 'Porudžbina dodata!');
    }

    // Dodajemo i ostale da ne bi posle imao istu grešku
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->all());
        return redirect()->route('order.index');
    }

    public function destroy($id)
    {
        Order::findOrFail($id)->delete();
        return redirect()->route('order.index');
    }
}
