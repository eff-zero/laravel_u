@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <div class="container">
            <p class="alert alert-secondary">{{ Session::get('message') }}</p>
        </div>
    @endif
    <div class="container">
        <h1 class="mb-4 text-uppercase text-center fw-bold" style="font-size: 3rem"> Cursos </h1>
        <div class="container text-center mb-4">
            <a href="" class="text-uppercase btn btn-dark">Crear Curso</a>
        </div>
        <table class="table text-center">
            <thead class="text-uppercase">
                <tr>
                    <th scope="col"> Profesor </th>
                    <th scope="col"> Curso </th>
                    <th scope="col"> Horas </th>
                    <th scope="col"> Nivel </th>
                    <th scope="colgroup"> Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->teacher->firstname . ' ' . $course->teacher->lastname }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->hours }}</td>
                        <td>{{ $course->level }}</td>
                        <td>
                            <div class="container">
                                <div class="row row-cols-xs-1 row-cols-sm-1 row-cols-md-2 g-1">
                                    <div class="col"><a href="" class="btn btn-warning w-100">Editar</a></div>
                                    <div class="col">
                                        <form action={{ route('course.destroy', $course) }} method="POST">
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
