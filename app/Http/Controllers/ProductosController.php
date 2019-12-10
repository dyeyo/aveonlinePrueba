<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductosRequest;
use App\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class productosController extends Controller
{
    public function index()
    {
        $product=Producto::all();
        return view('home',compact('product'));
    }

    public function create()
    {
        return view('producto.create');
    }

    public function store(ProductosRequest $request)
    {

        /*$request->validate([
            'referencia' => 'required|unique:productos',
            'nombre' => 'required',
            'observaciones' => 'required',
            'precio' => 'required|min:20',
            'inpuesto' => 'required|min:5',
            'cantidad' => 'required|min:4',
            'imagen' => 'image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'referencia.required' => 'La referencia es obligatoria',
            'referencia.unique' => 'La referencia ya esta registrada, pruebe otra',
            'nombre.required' => 'El nombre es Obligatorio',
            'precio.required' => 'El campo precio es obligatorio',
            'precio.min' => 'El campo precio debe tener menos de 20 caracteres',
            'inpuesto.min' => 'El campo inpuesto debe tener menos de 5 caracteres',
            'inpuesto.required' => 'El campo inpuesto es obligatorio',
            'cantidad.required' => 'El campo cantidad es obligatorio',
            'cantidad.min' =>'El campo inpuesto debe tener menos de 4 caracteres',
            'imagen.required' => 'La imagen es obligatoria',
            'imagen.mimes' => 'El formato de la imagen no es valido',
        ]);*/


        $product=new Producto();
        if ($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name1 = $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name1);
            $product->imagen = $name1;
        }
        $product->referencia=$request->referencia;
        $product->nombre=$request->nombre;
        $product->observaciones=$request->observaciones;
        $product->precio=$request->precio;
        $product->inpuesto=$request->inpuesto;
        $product->cantidad=$request->cantidad;
        $product->save();
        if ($product) {
            Session::flash('message','Producto Registrado con éxito');
            return redirect()->route('producto.index');
        } else {
            Session::flash('message','ocurrio un Problema');
            return  redirect()->route('producto.create');
        }
    }

    public function edit($id)
    {
        $product = producto::find($id);
        return view('producto.edit',compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product=producto::findOrFail($id);
        if ($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name1 = $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name1);
            $product->imagen = $name1;
        }
        $product->referencia=$request->referencia;
        $product->nombre=$request->nombre;
        $product->observaciones=$request->observaciones;
        $product->precio=$request->precio;
        $product->inpuesto=$request->inpuesto;
        $product->cantidad=$request->cantidad;
        $product->estado=$request->estado;
        $product->save();
        Session::flash('message','Producto editado con éxito');
        return redirect()->route('producto.index');

    }

    public function destroy($id)
    {
        $product=producto::findOrFail($id);
        $product->delete();
        Session::flash('message','Producto Eliminado con éxito');
        return redirect()->route('producto.index');

    }

}
