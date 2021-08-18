@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-4xl" style="color: mediumvioletred;">
                Create your new Blog !!
            </h1>
        </div>
    </div>

    <div class="w-4/5 m-auto pt-20">
        <form
            action="/blog"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            <input
                type="text"
                name="title"
                placeholder="Title here! "
                class="bg-gray-0 block border-b-2 w-full h-20 text-6xl outline-none"
            >
            <textarea
                name="description"
                placeholder="Write something !"
                class="py-20 bg-gray-0 block border-b-2 w-full h-20 text-xl outline-none">
            </textarea>

            <div class="bg-gray-lighter pt-15">
                <label  class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select your file .
                    </span>
                    <input
                        type="file"
                        name="image"
                        class="hidden"
                    >
                </label>
            </div>

            <button
                type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Submit your Post !
            </button>
        </form>
    </div>

@endsection
