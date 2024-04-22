<?php 

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{

  public function index()
  {
    $title = '';
    if (request('category')) {
      $category = Category::firstWhere('slug', request('category'));
      $title = ' in ' . $category->name;
    }
    if (request('user')) {
      $user = User::firstWhere('username', request('user'));
      $title = ' by ' . $user->name;
  }

  return view('home', [
    'title'=>'Home',
    'posts'=>Post::latest()->take(3)->get()
  ]);

  }

  public function show(Post $post)
    {
        return view('post', [
            "title" => "single post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}


?>