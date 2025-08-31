<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        //get all users
        $users = User::all();
        return view('posts.create', ['users' => $users]);
    }

    public function store()
    {

        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $postCreator
        ]);

        return to_route('posts.index');
    }

    public function edit(Post $post)
    {
        $users = User::all();
        return view('posts.edit', ['post' => $post, 'users' => $users]);
    }

    public function update($postId)
    {
        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        $postToUpdate = Post::find($postId);
        $postToUpdate->update([
            'title' => $title,
            'description' => $description,
            'user_id' => $postCreator
        ]);

        return to_route('posts.show', $postId);
    }




    public function destroy($postId)
    {

        $post = Post::find($postId);
        $post->delete();


        return to_route('posts.index');

    }
}
