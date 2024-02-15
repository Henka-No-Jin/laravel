@extends('layouts.dashboard')

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

<div class="detail-container">
    <h1 class="centered-font-32">{{$kelas -> kelas}}</h1>

    <a href="/dashboard/index" class="back-link">Back</a>
</div>
