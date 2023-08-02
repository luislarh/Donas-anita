@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

        {!! Form::open(['route'=>['producto.update', $producto], 'method'=>'PUT', 'files'=>true]) !!}    

        <div class="jumbotron">
            <div class="form-group">
                <label for="title">Ingrese Title</label>
                {!! Form::text('title',$producto->title,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="form-group">
                <label for="description">Ingrese Description</label>
                {!! Form::text('description', $producto->description ,['class'=>'form-control', 'maxlength' =>'155']) !!}
            </div>
            <div class="form-group">
                <label for="nombre">Ingrese Nombre</label>
                {!! Form::text('nombre', $producto->nombre ,['class'=>'form-control', 'maxlength' =>'100']) !!}
            </div>
            <div class="form-group">
                <label for="descripcion">Ingrese Descripcion</label>
                {!! Form::textarea('descripcion', $producto->descripcion ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="orden">Ingrese Orden</label>
                {!! Form::text('orden', $producto->orden ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="urlfoto">Imagen</label> <br>
                <img src="/img/producto/{{$producto->urlfoto}}" >
                {!! Form::file('urlfoto') !!}
            </div>
            
        </div>

        {!! Form::submit('GUARDAR', ['class'=>'btn btn-success']) !!}


        {!! Form::close ()!!}  
  

    
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'descripcion' );
</script>
@endsection