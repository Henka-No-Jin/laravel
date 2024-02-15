@extends('layouts.main')

@section('container')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Kelas</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($kelas as $grade)
    <tr>
      <td>{{ $grade -> kelas }} </td>
      <form action="/kelas/detail/{{$grade -> id}}" method="GET" class="d-inline" >
        <td><button class="btn btn-primary">Detail</button></td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection