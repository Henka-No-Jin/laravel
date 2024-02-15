@extends('layouts.main')

@section('styles')
<style>
    .centered-font-32 {
        text-align: center;
        font-size: 32px;
    }
</style>
@endsection


@section('container')

<table class="table table-dark">
    <thead>
      <td>
        <div style="text-align: center; font-size: 32px;">

            {{$student->nama}}

            {{$student->nis}}
            
            {{$student->tanggal_lahir}}
            {{$student->kelas->kelas}}
            {{$student->alamat}}
        
            <a href="/student/all">back</a>
        </div>
      </td>
    </thead>
    <tbody>
      <tr class="table-active">
        ...
      </tr>
      <tr>
        ...
      </tr>
    </tbody>
  </table>
@endsection
