@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">
            <a href="{{route('carrucel.create')}}" class="btn btn-primary">NUEVO</a>
            <table class="table table-striped">
                <thead>
                    <th>Orden</th>
                    <th>Imagen</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @forelse ($carrucels as $item)
                        <tr>
                            <td>{{$item->orden}}</td>
                            <td><img src="/img/carrucel/{{$item->urlfoto}}" width="300"></td>
                            <td>
                                
                                
                                {!! Form::open(['method'=>'DELETE', 'route'=>['carrucel.destroy', $item->id], 'style'=>'display:inline']) !!}
                                {!! Form::submit('ELIMINAR', ['class'=>'btn btn-danger', 'onclick'=>'return confirm("¿ESTA SEGURO DE ELIMINAR?")'])  !!}
                                {!! Form::close() !!}
                            </td>

                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>


            </table>
        </div>
    </div>
</div>

@endsection