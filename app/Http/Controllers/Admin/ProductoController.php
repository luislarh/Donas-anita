<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Str;
use Image;
use Session;

class ProductoController extends Controller
{
    //
    public function index(){
        if(!empty(Session::get('categoria_id'))){
            $productos = Producto::whereCategoria_id(Session::get('categoria_id'))->get();

            return view("admin.producto.index", compact('productos'));
        }
        
        
        //retorna una vista
        
    }
    public function create(){
        return view('admin.producto.create');
    }
    public function store(Request $request){

        $producto = new Producto($request->all());

        if($request->hasFile('urlfoto')){

            $imagen = $request->file('urlfoto');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->resize(1024, null, function($constraint){ $constraint->aspectRatio(); })
            ->save( public_path('/img/producto/'.$nuevonombre));

            $producto->urlfoto =  $nuevonombre;

        }

        $producto->categoria_id = Session::get('categoria_id');
        $producto->slug = Str::slug($request->nombre);
        $producto->save();
        return redirect('/admin/producto');
    }
    public function update(Request $request, $id){

        $producto = Producto::findOrFail($id);
        $producto->fill($request->all());
        $foto_anterior = $producto->urlfoto;

        if($request->hasFile('urlfoto')){

            $rutaAnterior = public_path('/img/producto/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
            
            $imagen = $request->file('urlfoto');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->resize(1024, null, function($constraint){ $constraint->aspectRatio(); })
            ->save( public_path('/img/producto/'.$nuevonombre));

            $producto->urlfoto =  $nuevonombre;

        }
        $producto->slug = Str::slug($request->nombre);
        $producto->save();
        return redirect('/admin/producto');
    }
    
    public function edit($id){
        $producto = Producto::findOrFail($id);
        return view('admin.producto.edit', compact('producto'));
    }
    public function destroy($id){
        $producto = Producto::findOrFail($id);
        $borrar = public_path('/img/producto/'.$producto->urlfoto);
        if(file_exists($borrar)){ unlink(realpath($borrar)); }

        $producto->delete();


        return redirect('/admin/producto');
    }


}
