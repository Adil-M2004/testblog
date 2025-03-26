php artisan make:controller CommentController@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>

<hr class="mt-10 mb-10">

<h2 class="text-4xl">Comments</h2>
@foreach($post->comments as $comment)
    <div class="mt-4">
        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->body }}</p>
    </div>
@endforeach

@auth
    <form action="{{ route('comments.store', $post) }}" method="POST" class="mt-10">
        @csrf
        <textarea name="body" rows="3" class="w-full p-2 border rounded" required></textarea>
        <button type="submit" class="mt-2 bg-blue-500 text-white py-2 px-4 rounded">Add Comment</button>
    </form>
@endauth
@endsection
