<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Product;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();

        return view('/home', compact('images'));
    }

    public function create()
    {

        return view('admin.create');
    }

    public function store(Request $request)
    {

        $product = new Image();

        $product->titulo = $request->titulo;
        $product->autor = $request->autor;
        $product->editorial = $request->editorial;
        $product->categoria = $request->categoria;
        $nameImage = $request->image->getClientOriginalName();
        $product->image = $nameImage;
        $request->image->move(public_path('img'), $nameImage);
         $product->save();
        return redirect()->to('/');
    }
}
