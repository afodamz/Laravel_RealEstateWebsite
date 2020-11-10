<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogVController extends Controller
{
    public function getBlog(){
        $blogs = Blog::orderBy('created_at','desc')->paginate(12);
        return view('blog')->with('blogs',$blogs);
    }

    public function getBlogDetails($id){
    	$detail = Blog::findOrFail($id);
        return view('details.blog-details', compact(['detail']));
    }
}
