<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(50)->create()->each(function (Post $post) {
            Image::factory(2)->create([
                'imagebale_id' => $post->id,
                'imagebale_type' => Post::class
            ]);
        });
    }
}
