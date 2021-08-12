@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-4xl" style="color: mediumvioletred;">
                Blog Posts are here !!
            </h1>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b boarder-gray-200">
     <div>
       <img src="https://cdn.pixabay.com/photo/2015/02/03/23/41/paper-623167_1280.jpg">
     </div>
     <div>
       <h2 class="text-gray-600 font-bold text-3xl pb-4">
         Create how to use own blog .
       </h2>
     </div>
    </div>


@endsection
