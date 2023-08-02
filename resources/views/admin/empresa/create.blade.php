@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

        {!! Form::open(['route'=>['categoria.store'], 'method'=>'POST', 'files'=>true]) !!}    

        <div class="jumbotron">
            <div class="form-group">
                <label for="title">Ingrese Title</label>
                {!! Form::text('title',null,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="form-group">
                <label for="description">Ingrese Description</label>
                {!! Form::text('description', null ,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="form-group">
                <label for="nombre">Ingrese Nombre</label>
                {!! Form::text('nombre', null ,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="form-group">
                <label for="descripcion">Ingrese Descripcion</label>
                {!! Form::text('descripcion', null ,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="form-group">
                <label for="orden">Ingrese Orden</label>
                {!! Form::text('orden', null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="urlfoto">Imagen</label> <br>
                <img src="/img/categoria/foto.jpg" >
                {!! Form::file('urlfoto') !!}
            </div>
            
        </div>
        
        


        {!! Form::submit('GUARDAR', ['class'=>'btn btn-primary']) !!}


        {!! Form::close ()!!}  
  

    
        </div>
    </div>
</div>
@endsection