@extends('layouts.main')

@section('styles')
<style>
  .detail-container {
      max-width: 800px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .centered-font-32 {
      text-align: center;
      font-size: 32px;
      margin-bottom: 20px;
  }

  .detail-item {
      font-size: 18px;
      margin-bottom: 10px;
  }

  .back-link {
      display: block;
      margin-top: 20px;
      text-align: center;
      font-size: 18px;
      color: #007bff;
  }

  .back-link:hover {
      text-decoration: underline;
  }
</style>
@endsection


@section('container')

<div class="detail-container">
  <h1 class="centered-font-32">{{ $student->nama }}</h1>
  <p class="detail-item"><strong>NIS:</strong> {{ $student->nis }}</p>
  <p class="detail-item"><strong>Tanggal Lahir:</strong> {{ $student->tanggal_lahir }}</p>
  <p class="detail-item"><strong>Kelas:</strong> {{ $student->kelas->kelas }}</p>
  <p class="detail-item"><strong>Alamat:</strong> {{ $student->alamat }}</p>

  <a href="/student/all" class="back-link">Back</a>
</div>
@endsection
