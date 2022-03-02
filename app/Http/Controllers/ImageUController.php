<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageU;
use App\Models\Image;
use App\Models\Product;

class ImageUController extends Controller
{
    public function indexU()
    {
        $imageU = ImageU::all();

        return view('admin/HomeU', compact('imageU'));
    }

    public function createU()
    {

        return view('admin.createU');
    }

    public function storeU(Request $request)
    {
        $product = new ImageU();

        $product->titulo = $request->titulo;
        $product->autor = $request->autor;
        $product->editorial = $request->editorial;
        $product->categoria = $request->categoria;
        $product->estatus = $request->estatus;
        $product->reseña = $request->reseña;
        $product->avance = $request->avance;
        $product->comAvance = $request->comAvance;
        $product->metaAnual = $request->metaAnual;
        $nameImage = $request->imageU->getClientOriginalName();
        $product->imageU = $nameImage;
        $request->imageU->move(public_path('ImgU'), $nameImage);
         $product->save();
        return redirect()->to('admin/HomeU');
    }
}
