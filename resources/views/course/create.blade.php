@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="rounded border shadow p-3 d-flex flex-column w-50">
            <h3 class="text-uppercase fw-bolder text-center mb-3"> Registrar Curso </h3>

            <form action={{ route('course.store') }} method="POST">
                @csrf
                <div class="mb-3">
                    <label for="teacher_id">Profesor</label>
                    {{-- <input type="text" class="form-control" name="teacher_id" id="teacher_id" value={{ old('teacher_id') }}>  --}}
                    <select name="teacher_id" id="teacher_id" class="form-select">
                        @foreach ($teachers as $teacher)
                            {{ $fullname = $teacher->firstname . ' ' . $teacher->lastname }}
                            <option {{ old('teacher_id') == $teacher->id ? 'selected' : '' }} value={{ $teacher->id }}>
                                {{ $fullname }} </option>
                        @endforeach
                    </select>
                    @error('teacher_id')
                        <p class="text-danger"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" value={{ old('name') }}>
                    @error('name')
                        <p class="text-danger"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="hours">Horas</label>
                    <input type="number" class="form-control" name="hours" id="hours" min="10" max="300"
                        step="10" value={{ old('hours') }}>
                    @error('hours')
                        <p class="text-danger"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="level">Nivel</label>
                    <input type="number" class="form-control" name="level" id="level" min="1" max="10"
                        step="1" value={{ old('level') }}>
                    @error('level')
                        <p class="text-danger"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-dark w-75"> Registrar </button>
                </div>

            </form>

        </div>
    @endsection
