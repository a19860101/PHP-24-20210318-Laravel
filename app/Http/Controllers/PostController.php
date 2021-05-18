<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $posts = Post::all();
        // $posts = Post::get();
        $posts = Post::orderBy('id','DESC')->get();
        // return view('post.index')->with('posts',$posts);
        // return view('post.index')->with(['posts'=>$posts]);
        // return view('post.index',['posts'=>$posts]);
        return view('post.index',compact('posts'));

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::get();
        return view('post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //方法一
        // $post = new Post;
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();

        //方法二
        // $post = new Post;
        // $post->fill([
        //     'title' => $request->title,
        //     'content' => $request->content
        // ]);
        // $post->save();

        //方法三
        // $post = new Post;
        // $post->fill($request->all());
        // $post->save();

        //方法四
        // Post::create($request->all());

        // return redirect('/post');

        // return $request->file('cover')->store('public/images');
        // $cover = md5(time());
        // return $request->file('cover')->storeAs('public/images', $cover);

        if($request->file('cover')){        
            $ext = $request->file('cover')->getClientOriginalExtension();
            // $cover = Str::uuid().'.'.$ext;
            $cover = md5(time()).'.'.$ext;
            $request->file('cover')->storeAs('public/images',$cover);
        }else{
            $cover = 'question-marks.jpg';
        }
        
        $post = new Post;
        $post->fill($request->all());
        $post->cover = $cover;
        $post->save();
        
        return redirect()->route('post.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //

        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $post->fill($request->all());
        // $post->title = $request->title;
        // $post->content = $request->content;
        $post->save();

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        // Post::destroy($post->id);

        return redirect()->route('post.index');
    }
}
