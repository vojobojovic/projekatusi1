<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Prikazuje katalog svih proizvoda.
     */
    public function index()
    {
        // Koristimo with('category') da izbegnemo "Nema" u koloni kategorija
        $products = Product::with('category')->get();

        return view('products_list', compact('products'));
    }

    /**
     * Otvara stranicu za dodavanje novog proizvoda.
     */
    public function create()
    {
        $categories = Category::all();

        return view('product_create', compact('categories'));
    }

    /**
     * Snima novi proizvod u bazu.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create($request->all());

        return redirect()->route('product.index')->with('success', 'Proizvod je uspešno dodat!');
    }

    /**
     * Otvara stranicu za izmenu postojećeg proizvoda.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('product_edit', compact('product', 'categories'));
    }

    /**
     * Čuva izmene u bazi podataka.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product->update($request->all());

        return redirect()->route('product.index')->with('success', 'Proizvod je ažuriran!');
    }

    /**
     * Briše proizvod iz baze.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Proizvod je obrisan!');
    }

    public function show($id)
    {
        // Uzimamo proizvod iz baze po njegovom ID-u
        $product = Product::with('category')->findOrFail($id);

        // Šaljemo ga na stranicu product_show
        return view('product_show', compact('product'));
    }
}
