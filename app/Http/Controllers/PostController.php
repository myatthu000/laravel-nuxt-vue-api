<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Builder[]|Collection
     */
    public function index()
    {
        return Post::query()->latest('id')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostRequest $request
     * @return Builder|\Illuminate\Database\Eloquent\Model
     */
    public function store(StorePostRequest $request)
    {
        $post = Post::query()->create([
            'user_id' => 1,
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return $post;
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Post
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostRequest $request
     * @param Post $post
     * @return int
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post = Post::query()->update([
            'user_id' => 1,
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return bool
     */
    public function destroy(Post $post)
    {
        return $post->delete();
    }
}
