<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $posts = [
            ['id' => 1, 'title' => 'First Post', 'postedBy' => 'John Doe', 'createdAt' => '2025-8-25 09:00:00'],
            ['id' => 2, 'title' => 'Second Post', 'postedBy' => 'John Doe', 'createdAt' => '2025-8-25 08:00:00']
        ];

        return view('posts.index', ['posts' => $posts]);
    }

    public function show($postId)
    {

        return view('posts.show');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        return to_route('posts.index');
    }

    public function edit($postId)
    {
        return view('posts.edit');
    }

    public function update($postId)
    {
        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        return to_route('posts.show', $postId);
    }
}
