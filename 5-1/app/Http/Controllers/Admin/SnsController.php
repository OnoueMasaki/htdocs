<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;

class SnsController extends Controller
{
    public function add(){
        return view('admin.sns.mutter');
    }
    public function create(Request $request){

        $this->validate($request, Post::$rules);

        $post = new Post;
        $post->user_id = auth()->id();
        $form = $request->all();

        unset($form['_token']);

        $post->fill($form);
        $post->save();

        return redirect('admin/sns/mutter');
    }

    public function index(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('admin.sns.mutter', ['posts' => $posts]);
    }

    public function delete(Request $request)
    {
        $post = Post::find($request->id);

        $post->delete();
        return redirect('admin/sns/mutter');
    }
    
}
