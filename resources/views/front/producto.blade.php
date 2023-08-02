@extends('layouts.appfront')

@section('content')
<div class="container bg-success pb-5">
    <div class="row">
        <h1 class="p-2 mt-5 text-white">{{$producto->categoria->nombre}} {{$producto->nombre}}</h1>
        <img src="/img/producto/{{$producto->urlfoto}}" width="1200" height="400">
    </div>
    <div class="row m-5 bg-white rounded-lg">
        <div class="col-sm-9 p-5 text-justify">
            {!! strip_tags($producto->descripcion, '<h1><strong><b><i><u><a><br><span>') !!}
        </div>
        <div class="col-sm-3 pt-5 pb-5 text-center text-white bg-success">
            <div>
                <h2 class="fw-bold text-dark">CONTACTO</h2>
                <hr>
                <p class="h2"><a href="tel:{{ $config->celular }}" class="btn btn-light btn-block">LLAMAR</a></p>
                <hr>
                <p class="h2"><a href="mailto:{{$config->email}}" class="btn btn-light btn-block">EMAIL</a></p>
                <hr>
                <a href="https://wa.me/4171067484/?text=Quiero%20comprar%20donas" class="btn  btn-outline-success rounded-pill btn-block">Enviar Mensaje</a>
            </div>
        </div>
    </div>

    

        

</div>
@endsection