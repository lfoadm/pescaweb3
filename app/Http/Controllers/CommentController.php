<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use Illuminate\Http\Response;
use App\Models\Comment;
use App\Models\Fish;
use Illuminate\Http\Request;

class CommentController extends Controller
{    
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Fish $fish)
    {
        return CommentResource::collection($fish->comments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Fish $fish, Request $request)
    {
        $comment = $fish->comments()->create($request->all());
        return response(['comment' => new CommentResource($comment)], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Fish $fish, Comment $comment)
    {
        return new CommentResource($comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Fish $fish, Request $request, Comment $comment)
    {
        $comment->update($request->all());
        return response('Comentario atualizado Com SUCESSOOOOOOOOOOO', Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fish $fish, Comment $comment)
    {
        $comment->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
