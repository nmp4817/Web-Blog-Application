<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostModel;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $posts = PostModel::all();
      // $posts = PostModel::orderBy('id','desc')->get();
      // $posts = PostModel::orderBy('id','desc')->take(1)->get();
      // $posts = PostModel::where('title', "Second Post")->get();
      // $posts = DB::select('SELECT * FROM post_models');

      $posts = PostModel::orderBy('created_at','desc')->paginate(2);
      return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required','body' => 'required']);

        //New Post
        $post = new PostModel;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = PostModel::find($id);
      return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = PostModel::find($id);
      return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, ['title' => 'required','body' => 'required']);

      //New Post
      $post = PostModel::find($id);
      $post->title = $request->input('title');
      $post->body = $request->input('body');
      $post->save();

      return redirect('/posts')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = PostModel::find($id);
        $post->delete();

        return redirect('/posts')->with('success','Post Deleted');
    }
}
