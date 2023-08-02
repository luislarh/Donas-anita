<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title',$config->seo_title)</title>
    <meta name= "description" content="@yield('description',$config->seo_description)">
    <meta property="og:type" content="website">
    <meta property="og:description" content="@yield('description',$config->seo_description)">
    <meta property="og:url" content="@yield('url','https://donasanita.com')">
    <meta property="og:site_name" content="donasanita.com')">
    <meta property="og:image" content="@yield('image','https://donasanita.com/img/'.$config->seo_urlfoto)">
    <link rel="canonical" href="@yield('url','https://donasanita.com')">
    <link rel="shortcut icon" href="/img/configuracion/{{$config->urlfavicon}}" type="image/png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
   
    <!-- Scripts -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Nunito:ital@1&display=swap');
      </style>
      <style>
        h1,h2,h3,h4,h5{
            font-family: 'Anton', sans-serif;

        }
        p,ul,li{
            font-family: 'Nunito', sans-serif;
        }
        .nav-link{
            font-family: 'Anton', sans-serif !important;
        }
        .navbar-light .navbar-nav .nav-link{color:  #FEB8C7  !important;}
        .bg-danger{background: #FEB8C7 !important;}
        .bg-success{background: #AED6F1!important;}
        .text-danger{color: #FEB8C7 !important;}
        .text-success{color: #AED6F1 !important;}
        /* Estilos para las cards */
        .custom-card {
            width: 18rem;
            height: 100%;
        }

        /* Estilos para las imágenes dentro de las cards */
        .custom-card img {
            height: 200px; /* Ajusta el valor para el tamaño deseado de la imagen */
            object-fit: cover; /* Para asegurar que todas las imágenes tengan el mismo tamaño */
        }
                
      </style>


</head>
<body class="bg-danger">
    

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/configuracion/{{$config->urllogo}}" alt="Logo Donas anita" width="150">
                </a>
        
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                        
                        @if (Auth::check() && (Auth::user()->external_auth === 'google' || Auth::user()->external_auth === 'github'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="color: red;">{{ Auth::user()->name }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: red;">{{ __('Salir') }}</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                  
                        
                        
                    

                    
                        <li class="nav-item">
                            <a class="nav-link" href="/empresa" title="Empresa">Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Donas
                            </a>
                            <ul class="dropdown-menu">
                                @forelse ($submenu as $item)
                                <a class="dropdown-item" href="/donas/{{$item->slug}}" title="{{$item->nombre}}">{{$item->nombre}}</a>
                                @empty
                                @endforelse
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog" title="Post">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contacto" title="Datos contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        

    

       

            @yield('content')
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>



</html>
