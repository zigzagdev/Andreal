 @extends('layouts.app')

 @section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-4xl" style="color: mediumvioletred;">
                Blog Posts are here !!
            </h1>
        </div>
    </div>

 @foreach($posts as $post)
     <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b boarder-gray-200">
         <div>
             <img src="{{ asset('images/' . $post->image_path) }}" alt="">
         </div>
         
         <div>
             <h2 class="text-gray-600 font-bold text-3xl pb-4">
                 {{$post->title}}
             </h2>

         <span class="text-gray-550">
           By<span class="font-bold italic text-gray-800">{{$post->user->name}}</span>,Created on {{ date('jS M Y', strtotime($post->updated_at)) }}.
         </span>

             <p class="text-xl text-gray-700  pt-8 pb-10 leading-8 font-light">
                {{$post->content}}
             </p>

             <a href="" class="uppercase bg-red-600 text-gray-100 font-extrabold py-4 px-8 rounded-3xl">
                 Keep Reading
             </a>
         </div>
     </div>
 @endforeach



@endsection
