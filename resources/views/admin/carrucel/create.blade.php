@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

        {!! Form::open(['route'=>['carrucel.store'], 'method'=>'POST', 'files'=>true]) !!}    

        <div class="jumbotron">
            
            
            <div class="form-group">
                <label for="descripcion">Ingrese Descripcion</label>
                {!! Form::text('descripcion', null ,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>

            <div class="form-group">
                <label for="link">Ingrese Link</label>
                {!! Form::text('link', null ,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                <label for="orden">Ingrese Orden</label>
                {!! Form::text('orden', null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="urlfoto">Imagen</label> <br>
                <img src="/img/carrucel/foto.jpg" >
                {!! Form::file('urlfoto') !!}
            </div>
            
        </div>
        
        


        {!! Form::submit('GUARDAR', ['class'=>'btn btn-primary']) !!}


        {!! Form::close ()!!}  
  

    
        </div>
    </div>
</div>
@endsection