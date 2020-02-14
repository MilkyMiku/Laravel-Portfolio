@extends('layouts.minimalist')

@section('content')
    <div class="title m-b-md">
        Hello World
    </div>

    <div class="links">
        <a href="{{route('blog')}}">Blog</a>
        <a href="https://github.com/{{config('custom.github_username')}}">GitHub</a>
        <a href="{{route('tasks')}}">Tasks</a>
    </div>


    <div class="tasks recent-tasks">
        <div class="tasks-title">Recent Tasks</div>
        @foreach($tasks as $task)
            <div class="task"><a @if($task->completed_at)class="completed" @endif href="/tasks/{{$task->id}}">{{$task->description}}</a></div>
        @endforeach
    </div>

    <div class="new-task">
        <form action="/tasks" method="post">
            @csrf
            <div><label for="description">New Task?</label></div>
            <input autofocus required autocomplete="off" id="description" name="description" type="text" class="@error('description') is-invalid @enderror">
            @error('description')
            <div class="alert alert-danger">Tasks can't be empty 😢</div>
            @enderror
            <div><input type="submit" value="Add!"></div>
        </form>
    </div>
@endsection
