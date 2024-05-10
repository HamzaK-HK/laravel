@extends('content.layout')
@section('content')
    {{-- <div class="flex flex-col items-center justify-center w-full"> --}}
        <div class="leading-10 flex flex-col justify-center items-center my-2 py-4 ">

          <div class="w-3/6 flex flex-col justify-center items-center">
            <h1 class="w-5/6 leading-10 text-3xl font-bold">
                {{ $post->title }}
            </h1>
            <div class="w-5/6 text-2xl">
                {!! $post->body !!}
            </div>
            <a href="/" class=" bg-blue-600 rounded-lg py-1 px-2 font
            -bold text-white">Go Back</a>
          </div>
        </div>
    {{-- </div> --}}
@endsection
