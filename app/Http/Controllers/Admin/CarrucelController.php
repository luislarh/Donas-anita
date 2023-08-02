<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrucel;

use Image;

class CarrucelController extends Controller
{
    //
    public function index(){
        $carrucels = Carrucel::all();
        //retorna una vista
        return view("admin.carrucel.index", compact('carrucels'));
    }
    public function create(){
        return view('admin.carrucel.create');
    }
    public function store(Request $request){

        $carrucel = new Carrucel($request->all());

        if($request->hasFile('urlfoto')){

            $imagen = $request->file('urlfoto');
            $nuevonombre = 'donas_'.time().'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200, 450, function($constraint){ $constraint->upsize(); })
            ->save( public_path('/img/carrucel/'.$nuevonombre));

            $carrucel->urlfoto =  $nuevonombre;

        }
        $carrucel->save();
        return redirect('/admin/carrucel');
    }
    public function update(Request $request, $id){

        $carrucel = Carrucel::findOrFail($id);
        $carrucel->fill($request->all());
        $foto_anterior = $carrucel->urlfoto;

        if($request->hasFile('urlfoto')){

            $rutaAnterior = public_path('/img/carrucel/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
            
            $imagen = $request->file('urlfoto');
            
            $nuevonombre = 'donas_'.time().'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200, 450, function($constraint){ $constraint->upsize(); })
            ->save( public_path('/img/carrucel'.$nuevonombre));

            $carrucel->urlfoto =  $nuevonombre;

        }
       
        $carrucel->save();
        return redirect('/admin/carrucel');
    }
 
    public function edit($id){
        $carrucel = Carrucel::findOrFail($id);
        return view('admin.carrucel.edit', compact('carrucel'));
    }
    public function destroy($id){
        $carrucel = Carrucel::findOrFail($id);
        $borrar = public_path('/img/carrucel/'.$carrucel->urlfoto);
        if(file_exists($borrar)){ unlink(realpath($borrar)); }

        $carrucel->delete();


        return redirect('/admin/carrucel');
    }

}
