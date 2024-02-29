@extends('layouts.app')
@section('content')
<div>
    <h1>Task List</h1>

    {{-- Melakukan loop untuk setiap task --}}
    @foreach ($task as $task)
    <div class="task-item">
        {{-- Menampilkan nama task --}}
        <strong>Name: {{ $task->name }}</strong> 
        {{-- Menampilkan deskripsi task --}}
        <p>Description: {{ $task->description }}</p>
        
        {{-- Link untuk melihat detail task --}}
        <a href="{{ url("/task/{$task->id}") }}" class="view-link">View</a>
        {{-- Link untuk mengedit task --}}
        <a href="{{ url('/task/' . $task->id. '/edit') }}" class="edit-link">Edit</a>

        {{-- Form untuk menghapus task --}}
        <form action="{{ url('/task/' . $task->id) }}" method="POST" class="delete-form">
            {{-- Menggunakan metode DELETE --}}
            @method('delete')
            {{-- CSRF token --}}
            @csrf
            {{-- Tombol untuk mengirimkan permintaan DELETE --}}
            <button type="submit">Delete</button>
        </form>
    </div>
    @endforeach
</div>
@endsection
