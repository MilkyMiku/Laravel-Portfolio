@extends('layouts.minimalist')

@section('content')


    <div class="tasks-title middle">Blog Posts</div>
    <div class="tasks">
        @foreach($blogs as $blog)
            <div class="task"><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></div>
        @endforeach
    </div>
{{--    <div class="new-task">--}}
{{--        <form action="/blog" method="post">--}}
{{--            @csrf--}}
{{--            <div><label for="description">New Post?</label></div>--}}
{{--            <input autofocus required autocomplete="off" id="description" name="description" type="text" class="@error('description') is-invalid @enderror">--}}
{{--            @error('description')--}}
{{--            <div class="alert alert-danger">Tasks can't be empty 😢</div>--}}
{{--            @enderror--}}
{{--            <div><input type="submit" value="Add!"></div>--}}
{{--        </form>--}}
{{--    </div>--}}
@endsection
