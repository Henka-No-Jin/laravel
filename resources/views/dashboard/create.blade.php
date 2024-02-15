@extends('layouts.main')

@section('container')

    <div class="container mt-5">    
    <form method="post" action="/dashboard/add">
        @csrf
        <div class="form-group">
            <label for="nis" style="margin-bottom: 15px; margin-top: 25px;">NIS</label>
            <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS" name="nis" value="{{old ('nis')}}">
        </div>
        <div class="form-group">
            <label for="nama" style="margin-bottom: 15px; margin-top: 25px;">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="{{old ('nama')}}">
        </div>  
        <div class="form-group">
            <label for="tgl_lahir" style="margin-bottom: 15px; margin-top: 25px;">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tanggal_lahir" value="{{old ('tanggal_lahir')}}">
        </div>

        <div class="mb-3">
            <label for="kelas" style="margin-bottom: 15px; margin-top: 25px;" class="form-label">Kelas</label>
            <select class="form-select" name="kelas_id" id="">
                @foreach ($grade as $class)
                <option name="kelas_id" value="{{$class -> id}}">{{$class -> kelas}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="alamat" style="margin-bottom: 15px; margin-top: 25px;">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan Alamat" name="alamat" value="{{old ('alamat')}}"></textarea>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top: 20px">Tambah</button>
        <a type="button" class="btn btn-secondary" style="margin-top: 20px; margin-left: 20px;" onclick="kembali()">Kembali</a>
    </form>
    </div>

    <script>
        function kembali() {
            if (confirm('Apakah Anda ingin kembali?')) {
                window.location.href = '/dashboard/index'; 
            }
        }
    </script>

@endsection