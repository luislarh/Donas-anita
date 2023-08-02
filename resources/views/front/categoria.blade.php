@extends('layouts.appfront')

@section('content')
<div class="container bg-success pb-5">
    <div class="row">
        <h1 class="p-2 mt-5 text-white">{{$categoria->nombre}}</h1>
        <img src="/img/categoria/{{$categoria->urlfoto}}" width="1200" height="400">
    </div>

    
        @forelse ($categoria->Producto as $r)
        <div class="row  m-5 bg-white p-3 rounded-lg">
            <div class="col-sm-12">
                <h2 class="text-danger h4">{{$r->nombre}}</h2>
            </div>
            <div class="row align-items-center bg-light">
                <div class="col-sm-4">
                    <img src="/img/producto/{{$r->urlfoto}}" class="img-fluid rounded-lg" width="500" height="350">
                </div>
                <div class="col-sm-8  rounded-lg">
                    <p>{{$r->description}}</p>
                    <div class="text-right">
                        <a href="/donas/{{$categoria->slug}}/{{$r->slug}}" class="btn btn-outline-dark rounded-pill pr-5 pl-5">AMPLIAR</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
            
        @endforelse
    

        

</div>
@endsection