@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <div class="container">
            <p class="alert alert-secondary">{{ Session::get('message') }}</p>
        </div>
    @endif
    <div class="container">
        <h1 class="mb-4 text-uppercase text-center fw-bold" style="font-size: 3rem"> Profesores </h1>
        <div class="container text-center mb-4">
            <a href={{ route('teacher.create') }} class="text-uppercase btn btn-dark">Crear profesor</a>
        </div>
        <table class="table text-center">
            <thead class="text-uppercase">
                <tr>
                    <th scope="col"> Nombre </th>
                    <th scope="col"> Apellido </th>
                    <th scope="col"> Email </th>
                    <th scope="col"> Telefono </th>
                    <th scope="col"> Departamento </th>
                    <th scope="col"> Acciones </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->firstname }}</td>
                        <td>{{ $teacher->lastname }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->phone }}</td>
                        <td>{{ $teacher->department }}</td>
                        <td>
                            <div class="container">
                                <div class="row row-cols-xs-1 row-cols-sm-1 row-cols-md-2 g-1">
                                    <div class="col"><a href={{ route('teacher.edit', $teacher) }} class="btn btn-warning w-100">Editar</a></div>
                                    <div class="col">
                                        <form action={{ route('teacher.destroy', $teacher) }} method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger w-100"
                                                onclick="return confirm('¿Desea Eliminar?')">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
