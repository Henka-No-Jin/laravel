@extends('layouts.main')

@section('container')
<table class="table">
  <thead>
    <tr>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Alamat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
    <tr>
      <td>{{ $student -> nis }} </td>
      <td>{{ $student -> nama }} </td>
      <td>{{ $student -> kelas -> kelas }} </td>
      <td>{{ $student -> alamat }} </td>
      <td><a type="button" class="btn btn-primary" href="/student/detail/{{$student -> id}}">Detail</button></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection