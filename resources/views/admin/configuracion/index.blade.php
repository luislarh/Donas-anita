@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

        {!! Form::open(['route'=>['configuracion.update', $registro], 'method'=>'PUT', 'files'=>true]) !!}    

        <div class="jumbotron">
            <div class="form-group">
                <label for="">Ingrese Title</label>
                {!! Form::text('seo_title', $registro->seo_title,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="form-group">
                <label for="">Ingrese Description</label>
                {!! Form::textarea('seo_description', $registro->seo_description,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="form-group">
                <label for="">Imagen Destacada</label> <br>
                <img src="/img/configuracion/{{$registro->seo_urlfoto}}" >
                {!! Form::file('seo_urlfoto') !!}
            </div>
        </div> 

        <div class="form-group row">
                <div class="col-sm-3">
                <label for="">Color Primario</label>
                {!! Form::text('coloPrimario', $registro->coloPrimario,['class'=>'form-control', 'maxlength' =>'67']) !!}
                </div>
            
                <div class="col-sm-9">
                    <label for="">Favicon</label>
                    <img src="/img/configuracion/{{$registro->urlfavicon}}">
                    {!! Form::file('urlfavicon') !!}
                </div>

                <div class="col-sm-3">
                <label for="">Color Secundario</label>
                {!! Form::text('colorSecundario', $registro->colorSecundario,['class'=>'form-control', 'maxlength' =>'67']) !!}
                </div>
            
            
                <div class="col-sm-9">
                <label for="">Logo</label>
                <img src="/img/configuracion/{{$registro->urllogo}}">
                {!! Form::file('urllogo') !!}
                </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                <label for="">Slogan</label>
                {!! Form::text('slogan', $registro->slogan,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="col-sm-6">
                <label for="">Frase 1</label>
                {!! Form::text('frase_1', $registro->frase_1,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="col-sm-6">
                <label for="">Frase 2</label>
                {!! Form::text('frase_2', $registro->frase_2,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="col-sm-6">
                <label for="">Frase 3</label>
                {!! Form::text('frase_3', $registro->frase_3,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
        </div>

        <div class="form-group row">
        
            <div class="col-sm-3">
                <label for="">Razon Social</label>
                {!! Form::text('razonsocial', $registro->razonsocial,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="col-sm-3">
                <label for="">Direccion</label>
                {!! Form::text('direccion', $registro->direccion,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="col-sm-3">
                <label for="">Celular</label>
                {!! Form::text('celular', $registro->celular,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="col-sm-3">
                <label for="">Email</label>
                {!! Form::text('email', $registro->email,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="col-sm-3">
                <label for="">Facebook</label>
                {!! Form::text('facebook', $registro->facebook,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="col-sm-3">
                <label for="">Whatsapp</label>
                {!! Form::text('whatsapp', $registro->whatsapp,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
        </div>



        {!! Form::submit('GUARDAR', ['class'=>'btn btn-success']) !!}


        {!! Form::close ()!!}  
  

    
        </div>
    </div>
</div>
@endsection