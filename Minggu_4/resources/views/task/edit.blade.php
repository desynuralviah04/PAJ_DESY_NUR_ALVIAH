@extends('layouts.app') // Meng-extend layout app.blade.php

@section('content') // Mulai bagian konten dari layout
    <div class="container"> // Container untuk konten
        <h2>Edit Task</h2> // Judul halaman edit task
        
        // Form untuk mengedit task
        <form action="{{url("/task/{$task->id}") }}" method="POST">
            @csrf // Membuat token CSRF
            @method('PUT') // Menentukan metode HTTP PUT
            
            <div class="form-group">
                <label for="name">Name</label> // Label untuk input nama
                <input type="text" class="form-control" id="name" name="name" value="{{ $task->name }}"> 
                // Input untuk nama task
            </div>
            <div class="form-group">
                <label for="description">Description</label> // Label untuk input deskripsi
                <input type="text" class="form-control" id="description" name="description" 
                value="{{ $task->description }}"> // Input untuk deskripsi task
            </div>
            <button type="submit" class="btn btn-primary">Update</button> // Tombol untuk mengirimkan form update
        </form> // Tutup form
    </div> // Tutup container
@endsection // Akhir dari bagian konten dari layout
