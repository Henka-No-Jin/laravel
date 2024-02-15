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

            {{$kelas -> kelas}}
        
            <a href="/kelas/all">back</a>
        </div>
      </td>
    </thead>
  </table>
@endsection
