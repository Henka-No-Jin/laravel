@extends('layouts.dashboard')

    <div class="container mt-5">    
    <form action="/kelas/update/{{ $kelas->id }}" method="POST">
        
        @csrf
        <div class="form-group">
            <label for="nama" style="margin-bottom: 15px; margin-top: 25px;">Masukan Nama kelas</label>
            <input type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas" name="kelas" value="{{old ('kelas', $kelas -> kelas) }}">
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top: 20px">Ubah</button>
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
