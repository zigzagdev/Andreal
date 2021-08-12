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

  public  function  index()
    {
      return view('blog.index');
    }
}
