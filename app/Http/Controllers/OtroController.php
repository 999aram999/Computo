<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Otro;

class OtroController extends Controller
{
    public function index()
    {
        $images = Otro::all();

        return view('user.index', compact('images'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $product = new Otro();

        $product->titulo = $request->titulo;
        $product->autor = $request->autor;
        $product->editorial = $request->editorial;
        $product->categoria = $request->categoria;
        $product->estatus = $request->estatus;
        $product->reseña = $request->reseña;
        $product->avance = $request->avance;
        $product->comAvance = $request->comAvance;
        $product->metaAnual = $request->metaAnual;
        // $nameImage = $request->image->getClientOriginalName();
        // $product->image = $nameImage;
        // $request->image->move(public_path('imgs'), $nameImage);
         $product->save();
        return redirect()->to('user/index');
    }
}
