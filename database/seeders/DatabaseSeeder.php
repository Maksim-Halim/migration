<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            'category_name' => 'Category 1',
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Category 2',
        ]);


        DB::table('posts')->insert([
            'post_title' => 'Post 1',
            'post_content' => 'Content for post 1',
            'category_id' => 1,
        ]);

        DB::table('posts')->insert([
            'post_title' => 'Post 2',
            'post_content' => 'Content for post 2',
            'category_id' => 2,
        ]);

        DB::table('comments')->insert([
            'comment_content' => 'Comment for post 1',
            'post_id' => 1,
        ]);

        DB::table('comments')->insert([
            'comment_content' => 'Comment for post 2',
            'post_id' => 2,
        ]);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
