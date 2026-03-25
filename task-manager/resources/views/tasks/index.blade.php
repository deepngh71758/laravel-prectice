@extends('layouts.app')

@section('tasks')
    <h1>Tasks</h1>

<a href="/tasks/create">Add Task</a>

@foreach($tasks as $task)

<x-card id="{{ $task->id }}" title="{{ $task->title }}" description="{{ $task->description }}" created_at="{{ $task->created_at }}"  />
{{-- <div>
    <h2>{{ $task->id }}</h2>
    <h3>{{ $task->title }}</h3>
    <p>{{ $task->description }}</p>
    <p>{{ $task->created_at }}</p>

    <a href="/tasks/{{ $task->id }}/edit">Edit</a>

    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div> --}}
@endforeach

@endsection
