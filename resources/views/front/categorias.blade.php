@extends('layouts.appfront')

@section('content')
<div class="container bg-success">
    <div class="row">
        <img src="/img/configuracion/{{$config->seo_urlfoto}}" class="img-fluid">
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 mt-5 mb-5 text-center">
            <h1 class="text-danger">DONAS</h1>
            <P style="font-family: 'Open Sans', sans-serif; font-size: 1.2rem; color: #333; ">
                ¡Déjate tentar por la dulzura y el placer de nuestras exquisitas creaciones!
            </P>
        </div>
        @foreach ($categorias as $r)
            <div class="col-sm-4 mt-4 mb-4 text-center ">
                <div class="card custom-card">
                    <div class="card-body">
                        <a href="/donas/{{$r->slug}}">
                            <img src="/img/categoria/{{$r->urlfoto}}"   class="card-img-top" >
                        </a>
                    </div>
                    <div class="card-footer">
                        <a href="/donas/{{$r->slug}}" class="text-decoration-none">
                            <h5 class="text-danger">{{$r->nombre}}</h5>
                        </a>
                    </div>
                </div>
            </div>



        @endforeach
    </div>
 
        

</div>
@endsection