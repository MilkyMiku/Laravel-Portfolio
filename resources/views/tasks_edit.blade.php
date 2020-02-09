@extends('layouts.minimalist')

@section('content')

    <div class="tasks-title middle">Edit Task</div>
    <div class="new-task">
        <form action="/tasks/{{$task->id}}" method="post">
            @method('put')
            @csrf

            <div><label for="description">Description</label></div>
            <input autofocus required autocomplete="off" value="{{$task->description}}" id="description" name="description" type="text" class="@error('description') is-invalid @enderror"/>
            @error('description')
            <div class="alert alert-danger"></div>
            @enderror
            <div><label for="completed">Completed?</label></div>
            <input id="completed" name="completed" type="checkbox" {{$task->completed_at ? "checked" : ""}}/>
            <div><input type="submit" value="Update!"/></div>
        </form>
        <form action="/tasks/{{$task->id}}" method="post" onSubmit="return confirm('Are you sure you wish to delete?');">
            @method('delete')
            @csrf
            <input type="submit" value="Delete" class="delete"/>
        </form>
    </div>
@endsection
