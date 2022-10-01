@extends('layouts.app')

@section('content')
{{-- <div class="container mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container d-flex flex-column justify-content-center align-items-center" style="height: 80vh">
    <h2 class="mb-3 fw-bolder"> IR A </h2>
    <div class="row row-cols-1 g-2">
        <div class="col"><a href={{ route('teacher.index') }} class="btn btn-lg btn-outline-dark text-uppercase w-100">profesores</a></div>
        <div class="col"><a href={{ route('student.index') }} class="btn btn-lg btn-outline-dark text-uppercase w-100">estudiantes</a></div>        
        <div class="col"><a href={{ route('course.index') }} class="btn btn-lg btn-outline-dark text-uppercase w-100">cursos</a></div>        
    </div>
</div>
@endsection
