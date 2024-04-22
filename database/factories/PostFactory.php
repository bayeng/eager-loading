<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'title'=>$this->faker->sentence(mt_rand(2,8)),
            'title'=>'GAME MMORPG ADVANTURE',
            'slug'=>$this->faker->slug(),
            'excerpt'=>$this->faker->paragraph(),
            'body'=>collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(fn($p)=> "<p>$p</p>")
                        ->implode(''),
            'user_id'=>mt_rand(1,3),
            'image'=>'post-image/H4tdCIv6MN8KF19W4LLjqIhNITz5hrftmkVWU5J5.jpg',
            'image2'=>'post-image/VxI3khjgMD19oTve8DUDjeouuj6nk436pc6LHylw.jpg',
            'image3'=>'post-image/Okfep1Wg2l3vcXV7b8yjotitskKExKxRTkFQQy0m.jpg',
            'image4'=>'post-image/UeAPPMsvH4FceWaoBj7FkiGr1HnGc2hwU1gC94JK.jpg',
            'slogan'=>'TEMUKAN SENSASI LEBIH NYATA DENGAN GAME PETUALANGAN VIRTUAL REALITY',
            'category_id'=>mt_rand(1,2),
            'video'=>'https://www.youtube.com/embed/dNlbs9FVctU'

        ];
    }
}
