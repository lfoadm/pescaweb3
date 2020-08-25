<?php

use App\Models\Category;
use App\Models\Comment;
use App\Models\Fish;
use App\Models\Like;
use App\User;
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
        // $this->call(UserSeeder::class);
        factory(User::class, 10)->create();
        factory(Category::class, 5)->create();
        factory(Fish::class, 10)->create();
        factory(Comment::class, 50)->create()->each(function($comment) {
            return $comment->like()->save(factory(Like::class)->make());
        });
    }
}
