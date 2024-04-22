<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title"=>"judul pertama",
            "slug"=>"judul-pertama",
            "author"=>"bayu krisna",
            "body"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum ducimus, magnam voluptatibus iusto amet recusandae ab natus consequuntur veniam laudantium voluptatum? Aliquid quis consequatur ullam repudiandae totam in pariatur at corrupti omnis. Eum, atque. Repudiandae dolorem odit accusantium hic ducimus?"
        ],
        [
            "title"=>"judul kedua",
            "slug"=>"judul-kedua",
            "author"=>"kunamm",
            "body"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum ducimus, magnam voluptatibus iusto amet recusandae ab natus consequuntur veniam laudantium voluptatum? Aliquid quis consequatur ullam repudiandae totam in pariatur at corrupti omnis. Eum, atque. Repudiandae dolorem odit accusantium hic ducimus?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        
        return $posts->firstWhere("slug",$slug);
    }
}
