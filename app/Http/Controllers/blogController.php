<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function submit(Request $request){
        
        $blog = new Blog;
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $image_ext = $file->getClientOriginalExtension();
            $new_image_name = rand(123456, 999999).".".$image_ext;
            $destination_path = public_path('/assets/img/blog');
            $file->move($destination_path, $new_image_name);
            $blog->image = $new_image_name;

        }
        $blog->title = $request->input('title');
        $blog->name = $request->input('author');
        $blog->tags = $request->input('tags');
        $blog->content = $request->input('content');
        $blog->save();
            
        return redirect('/admin')->with('status', 'Saved');
    }

}
