@extends('layouts.template')
@section('title','Página inicial')
@section('content')
    <div class="row g-2">
        @foreach($especialidades as $especialidad)
            <ul class="list-group">
                <li class="list-group-item">{{$especialidad->nombre}}</li>
            </ul>
        @endforeach
    </div>
@endsection
