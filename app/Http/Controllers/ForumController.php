<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ForumController extends Controller
{
    public function GetAllPosts(Request $request)
    {
        $posts = Forum::paginate(5);

        return view('forum.index', compact('posts'));
    }

    public function GetDashboard(Request $request)
    {
        $posts = Forum::with('users')->get();

        return view('mainpage')->with('posts', $posts);
    }

    public function GetPostsByFilter($filtertype, Request $request)
    {
        $posts = Forum::with('users')->where('type', $filtertype)->paginate(5);

        return view('forum.index', compact('posts'));
    }

    public function GetPostByID($id, Request $request)
    {
        $post = Forum::with('users')->where('postID', $id)->first();
        try {
            $isUser = $request->user()->id;
        } catch (\Exception $e) {
            $isUser = 0;
        }

        return view('forum.bacaselengkapnya')->with('post', $post)->with('id', $isUser);
    }

    public function CreatePost(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'type' => 'required',
            'forum-image' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('forum-image')) {
            $image = $request->file('forum-image');
            $imageName = $request['title'] . Auth::user()->id;
            $imagePath = $image->storeAs('public/forum/', $imageName . '.jpeg');
            $imagePathDB = substr($imagePath, 6);
        } else {
            $imagePathDB = "null";
        }

        $post = new Forum;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->id = Auth::user()->id;
        $post->image = $imagePathDB;
        $post->type = $request->type;
        $post->save();

        Alert::success('Cerita Berhasil Diunggah!', 'Terima kasih telah berbagi pengalaman kepada Kami! Ceritamu akan dapat dilihat oleh semua orang yang mengakses halaman ini. ');

        return redirect(url('/forum'));
    }

    public function DeletePost($id)
    {
        Forum::where('postID', $id)->limit(1)->delete();

        Alert::info('Cerita Telah Dihapus!', 'Cerita Anda telah dihapus dari halaman dan tidak dapat diakses lagi oleh pengguna lain.');

        return redirect(url('/lihat-profil'))->with('success', "Post Deleted");
    }

    public function UpdatePost(Request $request)
    {

        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'type' => 'required',
            'forum-image' => 'nullable'
        ]);

        if ($request->hasFile('forum-image')) {
            $image = $request->file('forum-image');
            $imageName = $request['title'] . Auth::user()->id;
            $imagePath = $image->storeAs('public/forum/', $imageName . '.jpeg');
            $imagePathDB = substr($imagePath, 6);
        } else {
            $imagePathDB = "null";
        }

        $post = Forum::where('postID', $request->postID)->limit(1)->update(['title' => $request->title, "content" => $request->content, "type"=>$request->type]); 
        if ($imagePathDB != "null") {
            $post = Forum::where('postID', $request->postID)->limit(1)->update(['image' => $imagePathDB]); 
        }

        Alert::info('Cerita Berhasil Diperbaharui!', 'Cerita Anda berhasil diperbaharui.');


        return redirect(url('/forum/posts/' . $request->postID))->with('success', "Post Created");
    }

    public function UpdateView($id)
    {
        $post = Forum::with('users')->where('postID', $id)->first();

        $choice = ['Kanker Paru-Paru', 'Kanker Hati', 'Kanker Darah', 'Kanker Usus Besar'];

        if (Auth::user()->id == $post->users->id) {
            return view('forum.edit')->with('post', $post)->with('choice', $choice);
        }

        return back();
    }
}
