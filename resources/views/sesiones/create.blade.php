@extends('template')

@section('title')
    Crear | Sesiones
@endsection

@section('content')
    <form class="row g-3" action="/sesiones/create" method="POST">
        @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="inputEmail" name="inputEmail" value="{{ $alumno['email']}}">
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="inputAddress" name="inputAddress" value="{{ $alumno['password']}}">
        </div>
        <div class="col-md-4">
            <label for="inputCity" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="inputCity" id="inputCity" value="{{ $alumno['name']}}">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Estado</label>
            <select id="inputState" name="inputState" class="form-select">
                <option selected>Elegir...</option>
                <option>Jalisco</option>
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
@endsection
