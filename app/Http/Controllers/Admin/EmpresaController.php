<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Str;
use Image;
use Session;


class EmpresaController extends Controller
{
    //
    public function index(){
        $empresa = Empresa::findOrFail(1);
        
        
        //retorna una vista
        return view("admin.empresa.index", compact('empresa'));
    }
   
    
    public function update(Request $request, $id){

        $empresa = Empresa::findOrFail($id);
        $empresa->fill($request->all());
        $urlsomos_anterior = $empresa->urlsomos;
        $urlhistoria_anterior = $empresa->urlhistoria;
        $urlmision_anterior = $empresa->urlmision;
        $urlvision_anterior = $empresa->urlvision;
        $urlvalores_anterior = $empresa->urlvalores;

        if($request->hasFile('urlsomos')){

            $rutaAnterior = public_path('/img/empresa/'.$urlsomos_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
            
            $imagen = $request->file('urlsomos');
            $nuevonombre = 'somos_'.'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200, 450, function($constraint){ $constraint->upsize(); })
            ->save( public_path('/img/empresa/'.$nuevonombre));

            $empresa->urlsomos =  $nuevonombre;

        }

        if($request->hasFile('urlhistoria')){

            $rutaAnterior = public_path('/img/empresa/'.$urlhistoria_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
            
            $imagen = $request->file('urlhistoria');
            $nuevonombre = 'historia_'.'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(400, 250, function($constraint){ $constraint->upsize(); })
            ->save( public_path('/img/empresa/'.$nuevonombre));

            $empresa->urlhistoria =  $nuevonombre;

        }
        if($request->hasFile('urlmision')){

            $rutaAnterior = public_path('/img/empresa/'.$urlmision_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
            
            $imagen = $request->file('urlmision');
            $nuevonombre = 'mision_'.'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(400, 250, function($constraint){ $constraint->upsize(); })
            ->save( public_path('/img/empresa/'.$nuevonombre));

            $empresa->urlmision =  $nuevonombre;

        }
        if($request->hasFile('urlvision')){

            $rutaAnterior = public_path('/img/empresa/'.$urlvision_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
            
            $imagen = $request->file('urlvision');
            $nuevonombre = 'vision_'.'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(400, 250, function($constraint){ $constraint->upsize(); })
            ->save( public_path('/img/empresa/'.$nuevonombre));

            $empresa->urlvision =  $nuevonombre;

        }
        if($request->hasFile('urlvalores')){

            $rutaAnterior = public_path('/img/empresa/'.$urlvalores_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
            
            $imagen = $request->file('urlvalores');
            $nuevonombre = 'valores_'.'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(400, 250, function($constraint){ $constraint->upsize(); })
            ->save( public_path('/img/empresa/'.$nuevonombre));

            $empresa->urlvalores =  $nuevonombre;

        }


        //$empresa->slug = Str::slug($request->nombre);
        $empresa->save();
        return redirect('/admin/empresa');
    }
    
   
   

}
