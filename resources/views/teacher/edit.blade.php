@extends('layouts.app')



@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="rounded border shadow p-3 d-flex flex-column w-50">
            <h3 class="text-uppercase fw-bolder text-center mb-3"> Editando Profesor: <span class="fw-light">
                    {{ $teacher->firstname . ' ' . $teacher->lastname }} </span> </h3>

            <form action={{ route('teacher.update', $teacher) }} method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="firstname">Nombre</label>
                    <input type="text" class="form-control" name="firstname" id="firstname"
                        value={{ old('firstname', $teacher->firstname) }}>
                    @error('firstname')
                        <p class="text-danger"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="lastname">Apellido</label>
                    <input type="text" class="form-control" name="lastname" id="lastname"
                        value={{ old('lastname', $teacher->lastname) }}>
                    @error('lastname')
                        <p class="text-danger"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email">Correo</label>
                    <input type="text" class="form-control" name="email" id="email"
                        value={{ old('email', $teacher->email) }}>
                    @error('email')
                        <p class="text-danger"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone">Celular</label>
                    <input type="text" class="form-control" name="phone" id="phone"
                        value={{ old('phone', $teacher->phone) }}>
                    @error('phone')
                        <p class="text-danger"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="department">Departamento</label>
                    <input type="text" class="form-control" name="department" id="department"
                        value={{ old('department', $teacher->department) }}>
                    @error('department')
                        <p class="text-danger"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-dark w-75"> Registrar </button>
                </div>

            </form>

        </div>
    </div>
@endsection
