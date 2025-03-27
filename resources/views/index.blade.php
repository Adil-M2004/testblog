@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Cooking Blog
                </h1>
                <a
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
              Welcome to my Food Blog
            </h2>

            <p class="py-8 text-gray-500 text-s">
                Here I talk about all my favourite Recipes and how to make them. I also share some of my favourite ingredients and where to find them.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Take a look at my latest blog post to find out more.
            </p>

            <a
                href="/blog"
                class="uppercase bg-red-500 text-black-100 text-s font-extrabold py-3 px-8 ">
                Check out the Blogs!
            </a>
        </div>
    </div>
<!-- Latest Blogs -->
    <div class="w-4/5 mx-auto py-15 border-b border-gray-200">
        @if ($latestPost)
            <h2 class="text-4xl font-bold text-gray-800">
                Latest Blog: {{ $latestPost->title }}
            </h2>
            <p class="text-gray-600 text-lg py-4">
                {{ Str::limit($latestPost->description, 500) }} <!-- Limit description to 150 characters -->
            </p>
            <a href="/blog/{{ $latestPost->slug }}" class="text-blue-500 hover:underline">
                Read More
            </a>
        @else
            <p class="text-gray-600">No blog posts available.</p>
        @endif
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
           Created By
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Adil Manzoor
        </span>

    </div>

@endsection
