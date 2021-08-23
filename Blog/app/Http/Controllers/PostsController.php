<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        return view('blog.index')
            -> with('posts',Post::orderBy('updated_at','DESC')->get())  ;
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
       $request->validate([
          'title' => 'required',
          'content' => 'required',
          'image' => 'required|mimes:jpg,png,jpeg|max:5048'
       ]);

       $newImageName = uniqid(). '-' .$request->title. '.' .
       $request->image->extension();

       $request->image->move(public_path('images'),$newImageName);
       $slug = SlugService::createSlug(Post::class,'slug',$request->title);


       Post::create([
         'title' => $request->input('title'),
         'content' => $request->input('content'),
         'slug' => SlugService::createSlug(Post::class,'slug',$request->title),
         'image_path' => $newImageName,
         'user_id' => auth()->user()->id

       ]);

       return redirect('/blog')
         ->with('message','Your post was posted correctly.');
    }

    public function show($slug)
    {
        return view('blog.show')
          ->with('post',Post::where('slug',$slug)->first());
    }
}
