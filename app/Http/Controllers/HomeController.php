<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $blogs = Blog::latest()->paginate(5);
        $boards= Boards::latest()->paginate(5);
        //return view('blogs.index',compact('blogs'))->with('i',(request()->input('page',1)-1)*5);

        return view('Admin.home',compact('blogs','boards'))->with('i',(request()->input('page',1)-1)*5);
    }
   public function trello()
   {
       
        $message="Hello";
       return view('Admin.Trello',compact('message'));
   }
}
