<?php

namespace App\Http\Controllers;

use App\Http\Resources\FishResource;
use App\Models\Fish;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FishResource::collection(Fish::latest()->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //auth()->user()->fish()->create($request()); Depois dos testes do postman, utilizar criacao para o usuario logado.
        Fish::create($request->all());
        return response('Fish inserido com sucesso', Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fish  $fish
     * @return \Illuminate\Http\Response
     */
    public function show(Fish $fish)
    {
        return new FishResource($fish);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fish  $fish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fish $fish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fish  $fish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fish $fish)
    {
        $fish->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
