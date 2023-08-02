@extends('layouts.appfront')

@section('content')

<div class="container-fluid p-0">
    <div id="carouselExampleRide" class="carousel slide"  data-bs-ride="true">
        <div class="carousel-indicators">
            @forelse ($carrucel as $item)
            <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="{{$item->orden}}" class="@if($loop->index==0) active @endif" aria-current="true" aria-label="Slide 1"></button>
           
            @empty
                
            @endforelse
          
        </div>
        <div class="carousel-inner">
        @forelse ($carrucel as $item)
          <div class="carousel-item @if($loop->index==0) active @endif">
            <img src="/img/carrucel/{{$item->urlfoto}}" class="d-block w-100" alt="{{$item->descripcion}}">
            <div class="carousel-caption d-none d-md-block pb-5">
              <h5>{{$item->descripcion}}</h5>
              <a href="{{$item->link}}" class="btn btn-danger">VER MÁS</a>
            </div>
          </div>
        @empty
                
        @endforelse
        
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
<div class="container-fluid bg-success">
    <h1 class=" pb-5 pt-5 mb-5 text-white text-center">{{$config->slogan}}</h1>
    <div class="container pb-1">
      <div class="row mt-5 mb-5 justify-content-center text-center text-center lead text-white">
        
        <div class="col-sm-3"><p>{{$config->frase_1}}</p></div>
        <div class="col-sm-3"><p>{{$config->frase_2}}</p></div>
        <div class="col-sm-3"><p>{{$config->frase_3}}</p></div>  

        <div class="col-sm-12 text-center mt-5">
          <a href="/donas" class="btn btn-outline-danger rounded-pill">VER DONAS</a>
        </div>
      </div>
    </div>
</div>



<div class="container">
  <div class="row mt-5 mb-5   justify-content-center text-center">
    <div class="col-sm-8 bg-light pt-5 pb-5">
      <div class="row">
      <div class="col-sm-12">
        <h2>PRODUCTOS MÁS DEMANDADOS</h2>
      </div>
      
      @forelse ($producto as $item)
      
       <div class="col-sm-4">
        <div class="card">
          <a href="/donas/{{$item->categoria->slug}}/{{$item->slug}}">
            <img src="/img/producto/{{$item->urlfoto}}" class="card-img-top" alt="{{$item->nombre}}" width="150" height="180">
          </a>
        </div>
        <div class="card-footer">
          <a href="/donas/{{$item->categoria->slug}}/{{$item->slug}}" class="btn btn-outline-dark rounded-pill btn-block">{{$item->nombre}}</a>
        </div>
        
       </div>
       
      
      @empty

      @endforelse
    </div>
  </div>
  <div class="col-sm-4 bg pt-5 pb-5">
    <h1 class="fw-bold text-white">CONTACTO INMEDIATO</h1>
    <h1 class="fw-bold text-white">WhatsApp</h1>
    <h4 class="display-4">{{ $config->celular }}</h4>
    <a href="https://wa.me/4171067484/?text=Quiero%20comprar%20donas" class="btn  btn-outline-success rounded-pill">Enviar Mensaje</a>
  </div>
</div>
</div>
<!--Donas -->

<!--Publicaciones -->
<div class="container">
  @forelse ($posts as $r)
  <div class="card mb-3" style="max-width: 1000px;">
      <div class="row g-0 d-flex align-items-center">
          <div class="col-md-4">
              <img src="/img/post/{{$r->urlfoto}}" class="img-fluid rounded-start img-thumbnail" alt="{{$r->nombre}}" width="200">
          </div>
          <div class="col-md-7 bg-light">
              <div class="card-body text-center">
                  <h3 class="card-title text-danger">{{$r->nombre}}</h3>
                  <p class="card-text">{{$r->description}}</p>
                  <p class="card-text"><small class="text-body-secondary">{{$r->created_at->diffForHumans()}}</small></p>
              </div>
          </div>
      </div>
  </div>
  @empty
  <!-- Código para mostrar algo en caso de que no haya registros -->
  @endforelse
</div>

<!--FIN Publicaciones -->

@endsection