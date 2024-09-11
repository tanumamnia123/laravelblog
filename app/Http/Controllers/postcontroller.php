<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

class PostController extends Controller
{
    public function index()
    {
        $posts = PostModel::all();
        return view('index', compact('posts'));
    }

    public function create()
    {
        return view('createpost');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'author_name' => 'required|string',
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $post = new PostModel;
        $post->author_name = $request->author_name;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts')->with('success', 'Your post is added successfully');
    }

    public function viewPost(PostModel $post)
   {
    return view('show', compact('post'));
    }

    public function editPost($id)
    {
        $post = PostModel::find($id);
        return view('edit_post', compact('post'));
    }

    public function updatePost(Request $request, $id)
    {
        $post = PostModel::find($id);

        $request->validate([
            'author_name' => 'required|string',
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $post->author_name = $request->author_name;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts')->with('success', 'Your post has been updated successfully');
    }

    public function deletePost($id)
    {
        $post = PostModel::find($id);
        $post->delete();

        return redirect()->route('posts')->with('success', 'Your post has been deleted successfully');
    }
}
