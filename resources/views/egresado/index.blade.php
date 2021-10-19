@extends('layouts.template')
@section('title','Página inicial')
@section('content')
    <div class="row g-2">
        @foreach($egresados as $egresado)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h2 class="card-title">{{$egresado->nombre}}</h2>
                        <p class="card-text">{{$egresado->edad}}</p>
                        <p class="card-text">{{$egresado->experiencia}}</p>
                        <p class="card-text">{{$egresado->telefono}}</p>
                        <p class="card-text">{{$egresado->correo}}</p>
                        <p class="card-text">{{$egresado->especialidad}}</p>
                        <img class="figure-img img-fluid rounded" src="{{$egresado->foto}}" width="200"/>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
