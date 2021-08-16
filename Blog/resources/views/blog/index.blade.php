 @extends('layouts.app')

 @section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-4xl" style="color: mediumvioletred;">
                Blog Posts are here !!
            </h1>
        </div>
    </div>

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a
                href="/blog/create"
                class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Create post
            </a>
        </div>
    @endif

    @foreach ($posts as $post)
      <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div>
                <img src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>
        <div>
          <h2 class="text-gray-700 font-bold text-5xl pb-4">
            {{ $post->title }}
          </h2>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
              {{ $post->content }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
              Keep Reading
            </a>
        </div>
      </div>
    @endforeach

 @endsection
