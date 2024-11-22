<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Catagory;
use App\Models\Post;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        
        $posts = Post::latest()->paginate(3);
        return view('posts.index')->with('posts', $posts);
    }

    public function create()
    {
        return view('posts.create')->with([
            'catagorys'=> Catagory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        if($request->hasFile('photo')){
           $path = $request->file('photo')->store('post-photos'); 
        }
        
        $post = Post::create([
            'title'=>$request->title,
            'user_id'=> 1,
            'catagory_id'=> $request->catagory_id,
            'short_content'=>$request->short_content,
            'content'=>$request->content,
            'photo' => $path
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, Post $post)
    {
        if($request->hasFile('photo')){
            if(isset($post->photo)){
                Storage::disk('public')->delete($post->photo);


            }
            $path = $request->file('photo')->store('post-photos'); 
         }
        
        $post = Post::create([
            'title'=>$request->title,
            'short_content'=>$request->short_content,
            'content'=>$request->content,
            'photo' => $path ?? $post->photo
        ]);
        return redirect()->route('posts.show', ['post'=>$post->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if(isset($post->photo)){
            Storage::delete($post->photo);
        }
        $post->delete();
        return redirect()->route('posts.index');
    }
}
