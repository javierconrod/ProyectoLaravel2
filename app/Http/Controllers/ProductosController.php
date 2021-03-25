<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller
{
    public function index(){
        $productos = Productos::all();
        return view('productos', ['productos' => $productos]);
    }

    public function editar($id){
        $productos = Productos::find($id);
        return view('update', ['productos' => $productos]);
    }

    public function crear(Request $request){
        Productos::create([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
        ]);
        return redirect('/productos');
    }

    public function update(Productos $productos, Request $request){
        $productos->update([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
        ]);
        return redirect("/productos");
    }

    public function destroy($id)
    {
        $productos = Productos::find($id);

        $productos->delete();

        return redirect("/productos");
    }

}
