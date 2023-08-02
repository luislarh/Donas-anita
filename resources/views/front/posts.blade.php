@extends('layouts.appfront')

@section('content')
<div class="container bg-success">
    <div class="row justify-content-center">
        <div class="col-sm-12 mt-5 mb-5 text-center">
            <h1 class="text-danger">BLOG</h1>
            <P class="h5" >
                Descubre las últimas noticias, recetas y curiosidades sobre el delicioso mundo de las donas.
            </P>
        </div>
    </div>

    <div class="row  pb-5">
        <div class="timeline p-5">
            <ul>
                @foreach ($posts as $r)
                <li>
                    <div class="content">
                        <h2 class="h4 "><a href="/blog/{{$r->slug}}" class="text-danger text-decoration-none bg-white d-inline-flex align-items-center">{{$r->nombre}}</a></h2>
                        <p class="text-white  text-justify" style=" font-size: 1.25rem;">{{$r->description}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

 
        

</div>
<style>
    .timeline{
        margin-top: 60px;
        
    }
    .timeline:before{
        content: '';
        position: absolute;
        left: 50%;
        width: 2px;
        height: 100%;
        background: #f79aae;

    }
    .timeline ul{
        margin: 0;
        padding: 0;
    }
    .timeline ul li{
        list-style: none;
        position: relative;
        width:50%;
        padding: 40px;
        box-sizing: border-box; 
    }
    .timeline ul li:nth-child(odd){
        float: left;
        text-align: right;
        clear: both;
       
    }
    .timeline ul li:nth-child(even){
        float: right;
        text-align: left;
        clear: both;
        
    }
    .timeline ul li:nth-child(odd)::before{
        content: '';
        position: absolute;
        top: 40px;
        right: -10px;
        width: 20px;
        height: 20px;
        background: black;
        border-radius: 50%;
    }
    .timeline ul li:nth-child(even)::before{
        content: '';
        position: absolute;
        top: 40px;
        left: -10px;
        width: 20px;
        height: 20px;
        background: black;
        border-radius: 50%;
    }

</style>
@endsection