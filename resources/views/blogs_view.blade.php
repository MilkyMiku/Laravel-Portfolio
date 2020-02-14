@extends('layouts.minimalist')

@section('content')
<div>
    <div class="title">{{$blog->title}}</div>
    <p class="blog_content">{{$blog->content}}</p>
</div>
@endsection
