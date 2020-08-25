<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Fish;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Fish::class, function (Faker $faker) {
    
    $title = $faker->sentence;
    $slug = Str::slug($title);
    
    return [
        'title' => $title,
        'slug' => $slug,
        'body'  => $faker->text,
        'photo' => $slug,
        'status'=> number_format(2),
        'size'  => $faker->unique(true)->numberBetween(23, 75),
        'category_id' => function(){
            return Category::all()->random();
        },
        'user_id' => function(){
            return User::all()->random();
        }

        
    ];
});
