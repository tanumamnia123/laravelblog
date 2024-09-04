<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postmodel;

class postcontroller extends Controller
{
   public function index(){
    $posts = postmodel::all();

    return view('index', compact('posts'));
   }
   public function create(){
    return view('createpost');
   }
   public function insert(Request $request)
   {
     $request->validate([
    'author_name' => 'required|string',
    'title' => 'required|string', 
    'content' => 'required|string', 
]);
      $post = new postmodel;
            $post->author_name = $request->author_name;
            $post->title = $request->title;
            $post->content = $request->content;
             $post->save();
return redirect()->route('posts')->with('success', 'Your Post is Added Successfully');
   }

    public function view_post($id)
{
     $post = postmodel::find($id);

    return view('show', compact('post'));
}
public function edit_post($id){
    $post = postmodel::find($id);

    return view('edit_post', compact('post'));
}
public function update_post(Request $request, $id)
{
  
    $post = postmodel::find($id);

    $request->validate([
        'author_name' => 'required|string',
        'title' => 'required|string',
        'content' => 'required|string',
    ]);

    $post->author_name = $request->author_name;
    $post->title = $request->title;
    $post->content = $request->content;
    $post->save();
    return redirect()->route('posts')->with('success', 'Your Post has been updated successfully');
}
public function delete_post($id){
    $post = postmodel::find($id);
        $post->delete();
     return redirect()->route('posts')->with('success', 'Your Post has been Delete successfully');
}


}
