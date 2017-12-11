@extends('layout')

@section('title','Usuarios')

@section('content')
        <div class="content">
            <div class="title m-b-md">
                Usuarios
            </div>

            <div class="links">

                @forelse( $usuarios as $usuario)
                    <a href="#">{{ $usuario }}</a>
                @empty
                    <p>No se encontraron usuarios.</p>
                @endforelse

            </div>
        </div>
@endsection