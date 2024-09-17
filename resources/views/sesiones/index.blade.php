@extends('template')

@section('title')
    Home | Sesiones
@endsection

@section('content')

    <div class="container-fluid">
        {{ dd(session()->all()) }}
        <a href="/sesiones/create">Nuevos alumno</a>
        @if (session()->has('alumnos'))
            <table class="table-info m-8">
                <thead>
                    <tr>
                        <th scope="col">Correo electrónico</th>
                        <th scope="col">Password</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    {{ $posicion = 0 }}
                    @foreach (session('alumnos') as $item)
                        <tr>
                            <th scope="row">{{ $item['email'] }}</th>
                            <td>{{ $item['password'] }} </td>
                            <td>{{ $item['name'] }}</td>
                            <td>@mdo</td>
                            <td><a href="/sesiones/editar/{{ $posicion }}" type="button" class="btn btn-primary">Editar</a></td>
                            <td><a href="" type="button" class="btn btn-danger">Borrar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h1>NO HAY REGISTROS</h1>
        @endif
    </div>

@endsection
