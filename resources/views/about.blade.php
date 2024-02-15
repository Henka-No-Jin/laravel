@extends('layouts.main')

@section('container')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Foto</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><h1>1</h1></th>
        <td>  <h1>{{$nama}}</h1></td>
        <td>  <h1>{{$kelas}}</h1></td>
        <td>  <img src="{{$foto}}" alt="" style="width: 500px;"></td>
      </tr>
    </tbody>
  </table>


@endsection