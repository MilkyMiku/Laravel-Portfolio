@extends('layouts.minimalist')

@section('content')


    @if (\Session::has('success'))
        <div class="alert alert-success">
            {{ \Session::get('success') }}
        </div>
    @endif
    <div class="tasks-title middle">All Tasks</div>
    <div class="tasks">
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
