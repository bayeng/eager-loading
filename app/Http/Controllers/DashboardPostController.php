<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'required|image|file|max:2048',
            'image2' => 'required|image|file|max:2048',
            'image3' => 'required|image|file|max:2048',
            'image4' => 'required|image|file|max:2048',
            'video' => 'required',
            'slogan' => 'required',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-image');
        }
        if ($request->file('image2')) {
            $validateData['image2'] = $request->file('image2')->store('post-image');
        }
        if ($request->file('image3')) {
            $validateData['image3'] = $request->file('image3')->store('post-image');
        }
        if ($request->file('image4')) {
            $validateData['image4'] = $request->file('image4')->store('post-image');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        $validateData['video'] = str_replace('https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $validateData['video']);
        $validateData['video'] = str_replace('https://youtu.be/', 'https://www.youtube.com/embed/', $validateData['video']);
        
        
        Post::create($validateData);

        return redirect('/dashboard/posts')->with('success', 'New post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = ([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:2048',
            'image2' => 'image|file|max:2048',
            'image3' => 'image|file|max:2048',
            'image4' => 'image|file|max:2048',
            'slogan' => 'required',
            'video' => 'required',
            'body' => 'required'
        ]);

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }
        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('post-image');
        }
        if ($request->file('image2')) {
            if ($request->oldImage2) {
                Storage::delete($request->oldImage2);
            }
            $validateData['image2'] = $request->file('image2')->store('post-image');
        }
        if ($request->file('image3')) {
            if ($request->oldImage3) {
                Storage::delete($request->oldImage3);
            }
            $validateData['image3'] = $request->file('image3')->store('post-image');
        }
        if ($request->file('image4')) {
            if ($request->oldImage4) {
                Storage::delete($request->oldImage4);
            }
            $validateData['image4'] = $request->file('image4')->store('post-image');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100);
        $validateData['video'] = str_replace('https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $validateData['video']);
        $validateData['video'] = str_replace('https://youtu.be/', 'https://www.youtube.com/embed/', $validateData['video']);

        Post::where('id', $post->id)
            ->update($validateData);

        return redirect('/dashboard/posts')->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }
        if ($post->image2) {
            Storage::delete($post->image2);
        }
        if ($post->image3) {
            Storage::delete($post->image3);
        }
        if ($post->image4) {
            Storage::delete($post->image3);
        }
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'post has been deleted');
    }
}
