@extends('layouts.app') 
<!-- Meng-extend layout dari aplikasi, biasanya berisi header, footer, dan elemen umum lainnya -->

@section('content') 
<!-- Menyisipkan konten spesifik untuk bagian 'content' -->

<div class="container">
    <h1>{{$task->name}}</h1> <!-- Menampilkan nama task -->
    <p>{{$task->description}}</p> <!-- Menampilkan deskripsi task -->

    <a href="{{url('/task')}}">Back To Task</a> <!-- Tombol untuk kembali ke halaman daftar task -->

</div>

@endsection <!-- Penutup dari bagian 'content' -->
