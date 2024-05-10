@extends('content.layout')
@section('content')
    <div class="flex flex-col items-center justify-center w-full">
        @foreach ($posts as $post)
            <div class="flex flex-col justify-center items-center border-b border-black my-2 py-4">
                <h1 class="text-blue-800 underline leading-10 text-start  w-full text-2xl font-bold">
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h1>
                <p class="text-xl  leading-10">{{ $post->excerpt }}</p>
            </div>
        @endforeach
    </div>
@endsection

