@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="mb-4 text-uppercase text-center fw-bold" style="font-size: 3rem"> Cursos </h1>
    <table class="table text-center text-uppercase">
      <thead>
        <tr>
          <th scope="col"> Profesor </th>
          <th scope="col"> Curso </th>
          <th scope="col"> Horas </th>
          <th scope="col"> Nivel </th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
@endsection