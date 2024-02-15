@extends('layouts.main')

@section('container')

    <div class="container mt-5">    
    <form method="post" action="/kelas/add">
        @csrf
        
        <div class="form-group">
            <label for="kelas" style="margin-bottom: 15px; margin-top: 25px;">Nama kelas</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Kelas" name="kelas" value="{{old ('kelas')}}">
        </div>  

        <button type="submit" class="btn btn-primary" style="margin-top: 20px">Tambah</button>
        <a type="button" class="btn btn-secondary" style="margin-top: 20px; margin-left: 20px;" onclick="kembali()">Kembali</a>
    </form>
    </div>

    <script>
        function kembali() {
            if (confirm('Apakah Anda ingin kembali?')) {
                window.location.href = '/kelas/all'; 
            }
        }
    </script>

@endsection