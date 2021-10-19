@extends('layouts.template')
@section('title','Página inicial')
@section('content')
    <div class="row g-2">
        @foreach($egresados as $egresado)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title">{{$egresado->nombre}}</h4>
                        <p class="card-text">Edad: {{$egresado->edad}}</p>
                        <p class="card-text">Experiencia: {{$egresado->experiencia}}</p>
                        <p class="card-text">Telefono: {{$egresado->telefono}}</p>
                        <p class="card-text">Correo: {{$egresado->correo}}</p>
                        <p class="card-text">Especialidad: {{$egresado->especialidad}}</p>
                        <img class="figure-img img-fluid rounded" src="{{$egresado->foto}}" width="200" height="200"/>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
