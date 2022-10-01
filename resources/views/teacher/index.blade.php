@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="mb-4 text-uppercase text-center fw-bold" style="font-size: 3rem"> Profesores </h1>
  <table class="table text-center text-uppercase">
    <thead>
      <tr>
        <th scope="col"> Nombre </th>
        <th scope="col"> Apellido </th>
        <th scope="col"> Email </th>
        <th scope="col"> Telefono </th>
        <th scope="col"> Departamento </th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>
</div>
@endsection