<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pcs;

class PcController extends Controller
{
    public function indexpc() {

        $pcs = pcs::all();

        return view('products.indexpc', compact('pcs'));
    }

    public function createpcs() 
    {
        return view('products.createpc');
    }

    public function show()
    {
        return view('products.createpc');
    }

    public function storepc(Request $request)
    {
        
        $pcs = new pcs();

        $pcs->Num = $request->Num;
        $pcs->Marca = $request->Marca;
        $pcs->Monitor = $request->Monitor;
        $pcs->RAM = $request->RAM;
        $pcs->Procesador = $request->Procesador;
        $pcs->Estatus = $request->Estatus;
        $pcs->Conexion = $request->Conexion;

        $pcs->save();

        return view('products.createpc');
    }

    public function editpc($id)
    {
        $pcs = pcs::find($id);

        return view('products.edit', compact('pcs'));
    }

    public function updatepc(Request $request, $id)
    {
        $pcs = pcs::find($id);
        $pcs->update($request->all());
        return redirect()->route('products.indexpc');
    }

    public function destroypc($id)
    {
        $pcs = pcs::find($id);
        $pcs->delete();
        return redirect()->route('products.indexpc');
        //return view('products.create');
    }
}
