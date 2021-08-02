@extends('layout')

@section('title', 'Home')

@section('content')
    <form action="/post"method="POST">
        @csrf
        <div class="mt-3">
        <textarea class="form-control" placeholder="Your Thoughts" name="content"></textarea>
        </div>
        <div class="mt-3">
            <input type="submit" class="btn btn-primary" value="Post">
        </div>
    </form>
    @foreach($posts as $post)
        <div class="card mt-3">
            <div class="card-body">
                <p>{{ $post->content }}</p>
                <a href="/post/{{$post->id}}">read more</a>
            </div>
            <div class="card-footer text-muted">
                <p>Posted by - {{\App\Models\User::find($post->user_id )->name}} ({{$post->created_at->diffForHumans()}})</p>
            </div>
        </div>
    @endforeach

@endsection
