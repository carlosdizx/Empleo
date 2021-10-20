@extends('layouts.template')
@section('title','Página inicial')
@section('content')
    <div class="row g-2">
        <h1>Listado de especialidades</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
        @foreach($especialidades as $especialidad)
            <tr>
                <td>{{$especialidad->id}}</td>
                <td>{{$especialidad->nombre}}</td>
                <td>
                    <a class="btn btn-warning">
                        <i class="fa fa-pencil"></i>
                    </a>
                    <a class="btn btn-danger">
                        <i class="fa fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
        @endforeach
            </tbody>
        </table>
    </div>
@endsection
