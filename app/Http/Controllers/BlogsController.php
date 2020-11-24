<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    public function index()
    {
        $data['blogs'] = DB::table('blogs')->where('published',1)->get();
        
        return view('home',$data);
    }

    public function getCreateBlog()
    {
        return view('blogs.add');
    }

    public function postCreateBlog(Request $request)
    {
        DB::table('blogs')->insert([
            'title' =>  $request->title,
            'description' => $request->description,
            'created_at' => now(),
            'user_id' => Auth::Id(),
        ]);

        return redirect('blogs');
    }

    public function getBlog($id)
    {
        $data['blog'] = DB::table('blogs')->where('id',$id)->first();
        return view('blogs.single_blog',$data);
    }

}