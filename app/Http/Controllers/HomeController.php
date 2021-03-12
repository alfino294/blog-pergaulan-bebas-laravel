<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;


class HomeController extends Controller
{
    //
    public function index(){
        $posts=Article::inRandomOrder()->orderBy('id')->paginate(0);
        $categories=Category::all();
        return view('home', compact('posts','categories'));
    }

   

    
   

   

   

}
