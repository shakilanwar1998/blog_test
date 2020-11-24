<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class AdminBlogsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->checkUser();
        $data['blogs'] = DB::table('blogs')->get();
        return view('admin.blogs.index',$data);
    }

    public function approve($id)
    {
        $this->checkUser();
        DB::table('blogs')->where('id',$id)->update(['published' => 1]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $this->checkUser();
        DB::table('blogs')->where('id',$id)->delete();
        return redirect()->back();
    }

    public function checkUser()
    {
        $user = Auth::user();
        if($user->id_cms_privileges == 1){
            return true;
        }
        else {
            echo "Access denied";
            die;
        }
    }
}
