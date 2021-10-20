@extends('layouts.template')
@section('title','Página inicial')
@section('content')
    <form action="{{ url('/especialidad') }}" method="post" autocomplete="off">
        @csrf
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
        <br />
        <input type="submit" class="btn btn-success" value="Registrar">
    </form>
@endsection
