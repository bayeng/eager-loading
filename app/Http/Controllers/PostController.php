<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        $postsQuery = Post::with('category', 'user')->latest()->filter(request(['search', 'category', 'user']));

        if (request('category')) {
            $category = Category::where('slug', request('category'))->first();
            if ($category) {
                $title = ' in ' . $category->name;
                $postsQuery->where('category_id', $category->id);
            }
        }

        if (request('user')) {
            $user = User::where('username', request('user'))->first();
            if ($user) {
                $title = ' by ' . $user->name;
                $postsQuery->where('user_id', $user->id);
            }
        }

        $posts = $postsQuery->paginate(9)->withQueryString();

        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => "posts",
            "posts" => $posts
        ]);
    }

    public function show(Post $post)
    {
        $post->load('category', 'user');

        return view('post', [
            "title" => "single post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
