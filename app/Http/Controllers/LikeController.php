<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function likeIt(Comment $comment)
    {
        $comment->like()->create([
            'user_id' => '1' //usuario 1 porque ainda náo implementei o authentication.
        ]);
    }

    public function unlikeIt(Comment $comment)
    {
        //$comment->like()->where(['user_id', auth()->id()])->first()->delete();
        $comment->like()->where('user_id', '1')->first()->delete();
    }
}
