<?php

namespace Database\Seeders;

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
        //
        for ($i=0; $i < 5; $i++) { 
            Post::create([
                'title' => 'Title #'.$i,
                'body' => 'Lorem ipsum dolor sit amer'
            ]);
        }
    }
}
