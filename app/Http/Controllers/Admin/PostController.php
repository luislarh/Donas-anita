<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Image;


class PostController extends Controller
{
    //

    public function index(){
        $post = Post::all();
        //retorna una vista
        return view("admin.post.index", compact('post'));
    }

    public function create(){
        $categorias = Categoria::orderBy('nombre','ASC')->pluck('nombre', 'id');
        return view('admin.post.create', compact('categorias'));
    }
    public function store(Request $request){

        $post = new Post($request->all());

        if($request->hasFile('urlfoto')){

            $imagen = $request->file('urlfoto');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->resize(1024, null, function($constraint){ $constraint->aspectRatio(); })
            ->save( public_path('/img/post/'.$nuevonombre));

            $post->urlfoto =  $nuevonombre;

        }
        $post->slug = Str::slug($request->nombre);
        $post->save();
        return redirect('/admin/post');
    }
    public function update(Request $request, $id){

        $post = Post::findOrFail($id);
        $post->fill($request->all());
        $foto_anterior = $post->urlfoto;

        if($request->hasFile('seo_urlfoto')){

            $rutaAnterior = public_path('/img/post/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
            
            $imagen = $request->file('seo_urlfoto');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->resize(1024, null, function($constraint){ $constraint->aspectRatio(); })
            ->save( public_path('/img/post/'.$nuevonombre));

            $post->seo_urlfoto =  $nuevonombre;

        }
        $post->slug = Str::slug($request->nombre);
        $post->save();
        return redirect('/admin/post');
    }
   
    public function edit($id){
        $post = Post::findOrFail($id);
        $categorias = Categoria::orderBy('nombre','ASC')->pluck('nombre', 'id');
        return view('admin.post.edit', compact('post', 'categorias'));
    }
    public function destroy($id){
        $post = Post::findOrFail($id);
        $borrar = public_path('/img/post/'.$post->urlfoto);
        if(file_exists($borrar)){ unlink(realpath($borrar)); }

        $post->delete();


        return redirect('/admin/post');
    }
}
