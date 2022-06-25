@extends('layout')
@section('page')
{{-- {{dd($tasks)}} --}}
<table>
    <thead>
        <tr>
            {{-- <th>Id</th> --}}
            <th>Tasks</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                {{-- <td>{{ $task->id }}</td> --}}
                <td>{{ $task->title }}</td>
                <td>{{ $task->completed }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<div>
    <h2>Add Task:</h2>
    <form action="{{ route('taskAdd', ['id' => $userId]) }}" method="post">
        @csrf
        <label for="title">
            Title:
            <input type="text" name="title" required>
        </label>
        <label for="completed">
            Completed:
            <input type="checkbox" name="completed">
        </label>
        <input type="submit" value="Save Task">
</div>
</form>
@endsection