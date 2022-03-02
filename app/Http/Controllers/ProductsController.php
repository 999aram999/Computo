<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() 
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = new Product();

        $product->titulo = $request->titulo;
        $product->autor = $request->autor;
        $product->editorial = $request->editorial;
        $product->lpublicacion = $request->lpublicacion;
        $product->apublicacion = $request->apublicacion;
        $product->categoria = $request->categoria;

        $product->save();

        return view('products.index');
    }
}
