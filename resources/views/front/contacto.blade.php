@extends('layouts.appfront')

@section('content')
<div class="container bg-success pb-5">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="mt-5 text-danger">CONTACTO</h1>
        </div>
        
        <div class="col-sm-8 bg-white p-5">
            <h2>DATOS DE CONTACTO</h2>
            <ul>
                <li>Razón Social: {{$config->razonsocial}}</li>
                <li>Dirección: {{$config->direccion}}</li>
                <li>Celular: {{$config->celular}}</li>
                <li>Email: {{$config->email}}</li>
            </ul>

            <h2>FORMULARIO</h2>
           


            <form action="/contacto" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                  </div>
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                  </div>
                  <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                  </div>
                  <input type="submit" class="btn btn-danger" name="btnenviar" value="Enviar Mensaje">
            </form>

        </div>
        <div class="col-sm-4 bg-light map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.361555509919!2d-100.72039416163074!3d20.035293135730694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cd594feda9d61%3A0x2677a788296af57!2sDonas%20Anita!5e0!3m2!1ses-419!2smx!4v1690484246836!5m2!1ses-419!2smx" width="100%" class="vh-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


    </div>
</div>
<style>
    /* Estilos del contenedor del mapa */
    .map-container {
        position: relative;
        overflow: hidden;
        padding-bottom: 56.25%; /* Proporción de aspecto para mantener el mapa en formato 16:9 */
    }

    /* Estilos para la iframe del mapa */
    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
        filter: grayscale(1); /* Convertir el mapa a escala de grises */
        opacity: 0.7; /* Opacidad del mapa */
        transition: opacity 0.3s ease-in-out; /* Transición suave de opacidad al pasar el mouse */
    }

    /* Estilos para cambiar la opacidad y saturación al pasar el mouse sobre el mapa */
    .map-container:hover iframe {
        opacity: 1;
        filter: none;
    }
</style>
@endsection