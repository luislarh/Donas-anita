@extends('layouts.appfront')

@section('content')
<div class="container bg-success">
    <h1 class="pt-4 text-white">NOSOTROS</h1>
    <div class="row">
        <img src="/img/empresa/{{$empresa->urlsomos}}" class="img-fluid">
    </div>
 
        <div class="col-sm-12  p-5 mb-5 bg-white">
            <h2 class="text-danger">QUIENES SOMOS</h2>
            <p style="font-family: 'Open Sans', sans-serif; font-size: 1.2rem; color: #333;  text-align: justify;">
                {!!strip_tags($empresa->somos, '<h1><strong><b><i><u><a><br><span>')!!}
            </p>
            <div class="row mt-5 mb-5 aling-items-center">
                <div class="col-sm-4 ">
                    <img src="/img/empresa/{{$empresa->urlmision}}" class="img-thumbnail">
                </div>
                <div class="col-sm-8">
                    <h2 class="text-danger">MISIÓN</h2>
                    <p style="font-family: 'Open Sans', sans-serif; font-size: 1.2rem; color: #333;  text-align: justify;">
                        {!!strip_tags($empresa->mision, '<h1><strong><b><i><u><a><br><span>')!!}
                    </p>
                </div>
            </div>

            <div class="row mt-5 mb-5 aling-items-center">
                
                <div class="col-sm-8 ">
                    <h2 class="text-danger">VISIÓN</h2>
                    <p style="font-family: 'Open Sans', sans-serif; font-size: 1.2rem; color: #333;  text-align: justify;">
                        {!! strip_tags($empresa->vision, '<h1><strong><b><i><u><a><br><span>') !!}
                    </p>
                </div>
                <div class="col-sm-4 d-flex align-items-center justify-content-center">
                    <img src="/img/empresa/{{$empresa->urlvision}}" class="img-thumbnail">
                </div>
            </div>

            <div class="row mt-5 mb-5 aling-items-center">
                <div class="col-sm-4 d-flex align-items-center justify-content-center">
                    <img src="/img/empresa/{{$empresa->urlhistoria}}" class="img-thumbnail">
                </div>
                <div class="col-sm-8">
                    <h2 class="text-danger">RESEÑA HISTORICA</h2>
                    <p style="font-family: 'Open Sans', sans-serif; font-size: 1.2rem; color: #333;  text-align: justify;">
                        {!!strip_tags($empresa->historia, '<h1><strong><b><i><u><a><br><span>') !!}
                    </p>
                </div>
            </div>

            <div class="row mt-5 mb-5 aling-items-center">
                
                <div class="col-sm-8">
                    <h2 class="text-danger">VALORES CORPORATIVOS</h2>
                    <p style="font-family: 'Open Sans', sans-serif; font-size: 1.2rem; color: #333;  text-align: justify;">
                        {!!strip_tags($empresa->valores, '<h1><ul><li><strong><b><i><u><a><br><span>') !!}
                    </p>
                </div>
                <div class="col-sm-4 d-flex align-items-center justify-content-center">
                    <img src="/img/empresa/{{$empresa->urlvalores}}" class="img-fluid img-thumbnail">
                </div>
            </div>


        </div>

</div>
@endsection