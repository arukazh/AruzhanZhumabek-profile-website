<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
     public function index(){
         $blogs = Blog::all();

         return view('blog.index')->with(['blogs' => $blogs]);
     }  
     
     public function store(Request $request){
         Blog::create([
             'name' => $request->name,
             'surname' => $request->surname, 
             'age' => $request->age
         ]);

         return back();

     }
    }
