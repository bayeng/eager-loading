<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name'=>'Bayu Krisna',
            'username'=>'bayukrisna',
            'email'=>'bayu@gmail.com',
            'password'=>bcrypt('kunam')
        ]);

        User::factory(2)->create();
        // User::create([
        //     'name'=>'kunam manuk',
        //     'email'=>'kunam@gmail.com',
        //     'password'=>'kunam'
        // ]);

        Category::create([
            'name'=>'Virtual Reality',
            'slug'=>'virtual-reality',

        ]);

        Category::create([
            'name'=>'Metaverse',
            'slug'=>'metaverse',

        ]);
        Category::create([
            'name'=>'Internet Of Things',
            'slug'=>'internet-of-things',

        ]);

         Post::factory(1000)->create();

//        Post::create([
//            'title'=>'judul pertama',
//            'slug'=>'judul-pertama',
//            'excerpt'=>'lorem ipsum tot vok',
//            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam magnam, magni harum quae laboriosam obcaecati eveniet cumque fugiat impedit ea corrupti eius voluptates aliquid vitae quaerat? Consequatur, nobis reprehenderit quis quod vel recusandae perferendis consectetur libero, enim rerum culpa, eum voluptatum expedita eaque sapiente corrupti ea nam possimus? Error, eveniet!',
//            'category_id'=>1,
//            'slogan'=>'jaya jaya luar biasa',
//            'user_id'=>1,
//            'video'=>'https://www.youtube.com/embed/yUKRkPKg5_U'
//
//        ]);

        // Post::create([
        //     'title'=>'judul kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'lorem ipsum tot vok',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam magnam, magni harum quae laboriosam obcaecati eveniet cumque fugiat impedit ea corrupti eius voluptates aliquid vitae quaerat? Consequatur, nobis reprehenderit quis quod vel recusandae perferendis consectetur libero, enim rerum culpa, eum voluptatum expedita eaque sapiente corrupti ea nam possimus? Error, eveniet!',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);

        // Post::create([
        //     'title'=>'judul ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'lorem ipsum tot vok',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam magnam, magni harum quae laboriosam obcaecati eveniet cumque fugiat impedit ea corrupti eius voluptates aliquid vitae quaerat? Consequatur, nobis reprehenderit quis quod vel recusandae perferendis consectetur libero, enim rerum culpa, eum voluptatum expedita eaque sapiente corrupti ea nam possimus? Error, eveniet!',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);

    }
}
