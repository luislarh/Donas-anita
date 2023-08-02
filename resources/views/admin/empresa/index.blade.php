@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

        {!! Form::open(['route'=>['empresa.update', $empresa], 'method'=>'PUT', 'files'=>true]) !!}    

        <div class="jumbotron">
            <div class="form-group">
                <label for="title">Ingrese Title</label>
                {!! Form::text('title',$empresa->title,['class'=>'form-control', 'maxlength' =>'67']) !!}
            </div>
            <div class="form-group">
                <label for="description">Ingrese Description</label>
                {!! Form::textarea('description', $empresa->description ,['class'=>'form-control', 'maxlength' =>'155', 'rows'=>'3']) !!}
            </div>
            <div class="form-group">
                <label for="somos">SOMOS</label>
                {!! Form::textarea('somos', $empresa->somos ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="urlsomos">Imagen somos</label> <br>
                <img src="/img/empresa/{{$empresa->urlsomos}}" >
                {!! Form::file('urlsomos') !!}
            </div>

            <div class="form-group">
                <label for="historia">HISTORIA</label>
                {!! Form::textarea('historia', $empresa->historia ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="urlhistoria">Imagen Historia</label> <br>
                <img src="/img/empresa/{{$empresa->urlhistoria}}" >
                {!! Form::file('urlhistoria') !!}
            </div>
            <div class="form-group">
                <label for="mision">MISION</label>
                {!! Form::textarea('mision', $empresa->mision ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="urlmision">Imagen Misión</label> <br>
                <img src="/img/empresa/{{$empresa->urlmision}}" >
                {!! Form::file('urlmision') !!}
            </div>
            <div class="form-group">
                <label for="vision">VISION</label>
                {!! Form::textarea('vision', $empresa->vision ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="urlvision">Imagen Visión</label> <br>
                <img src="/img/empresa/{{$empresa->urlvision}}" >
                {!! Form::file('urlvision') !!}
            </div>
            <div class="form-group">
                <label for="valores">VALORES</label>
                {!! Form::textarea('valores', $empresa->valores ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="urlvalores">Imagen Valores</label> <br>
                <img src="/img/empresa/{{$empresa->urlvalores}}" >
                {!! Form::file('urlvalores') !!}
            </div>
            
        </div>

        {!! Form::submit('GUARDAR', ['class'=>'btn btn-success']) !!}


        {!! Form::close ()!!}  
  

    
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'somos' );
</script>
<script>
    CKEDITOR.replace( 'historia' );
</script>
<script>
    CKEDITOR.replace( 'mision' );
</script>
<script>
    CKEDITOR.replace( 'vision' );
</script>
<script>
    CKEDITOR.replace( 'valores' );
</script>
@endsection