<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use App\Models\User;

class ForumController extends Controller
{
    public function GetAllPosts(Request $request)
    {
        $posts = Forum::with('users')->get();

        return view('forum.index')->with('posts', $posts);
    }

    public function GetPostByID($id)
    {
        $post = Forum::find($id);

        return view('forum.bacaselengkapnya')->with('post', $post);
    }

    public function CreatePost(Request $request)
    {
        $input = $request->all();
        extract($input);

        $userId = $request->session()->get('id');

        $post = new Forum;
        $post->title = $title;
        $post->content = $content;
        $post->author = $userId;
        $post->like = 0;
        $image = $request->file('image');
        $image_title = $title . "_" . date('Y-m-d') . '.' . $image->getClientOriginalExtension();
        $image->move("upload/post/", $image_title);
        $post->image = "upload/post/" . $image_title;
        $post->save();

        return redirect(url('/forum'))->with('success',"Post Created");
    }

    public function DeletePost($id)
    {
        $post = Forum::find($id);
        $post->delete();

        return redirect(url('/dashboard'))->with('success',"Post Deleted");
    }

    public function UpdatePost(Request $request)
    {
        
        $input = $request->all();
        extract($input);

        $post = Forum::find($id);
        $post->title = $title;
        $post->content = $content;
        $post->save();

        return redirect(url('/dashboard'))->with('success',"Post Updated");
    }
}
