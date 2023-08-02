@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

        {!! Form::open(['route'=>['carrucel.update', $carrucel], 'method'=>'PUT', 'files'=>true]) !!}    

        <div class="jumbotron">
            
            <div class="form-group">
                <label for="descripcion">Ingrese Descripcion</label>
                {!! Form::text('descripcion', $carrucel->descripcion ,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>

            <div class="form-group">
                <label for="link">Ingrese Link</label>
                {!! Form::text('link', $carrucel->link ,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                <label for="orden">Ingrese Orden</label>
                {!! Form::text('orden', $carrucel->orden ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="urlfoto">Imagen</label> <br>
                <img src="/img/carrucel/{{$carrucel->urlfoto}}" >
                {!! Form::file('urlfoto') !!}
            </div>
            
        </div>

        {!! Form::submit('GUARDAR', ['class'=>'btn btn-success']) !!}


        {!! Form::close ()!!}  
  

    
        </div>
    </div>
</div>
@endsection