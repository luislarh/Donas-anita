@extends('layouts.appfront')

@section('content')
<div class="container bg-success pb-5">
    <div class="row">
        <h1 class="p-2 mt-5 text-white w-100 text-center">{{$post->nombre}}</h1>
        <img src="/img/post/{{$post->urlfoto}}" class=" mx-auto d-block" width="900" height="450">

        
    </div>
    <div class="col-sm-12 p-5 mt-5 mb-5 bg-white rounded-lg">
        {!!$post->descripcion!!}
        <hr>

        <p class="small text-right">Leido {{$post->visitas}} veces | Publicado {{$post->created_at->diffForHumans()}}</p>
    </div>

    
</div>
@endsection