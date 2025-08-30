@extends('layouts.app')

@section('title', 'edit')




@section('content')

    <div class="mt-5  p-10">
        <form method="POST" action="{{route('posts.update',1)}}">
            @csrf
            @method('PUT')
            <div>
                <label class="font-semibold block">Title:</label>
                <input class=" bg-gray-100  rounded p-2 w-full" type="text" name="title"/>
            </div>

            <div class="mt-5">
                <label class="font-semibold block">description:</label>
                <textarea name="description" class="bg-gray-100 rounded p-2 w-full"></textarea>
            </div>

            <div class="mt-5">
                <label class="font-semibold block">post Creator:</label>
                <select name="post_creator" class="bg-gray-100 w-full py-3 px-2">
                    <option value="1">Ahmed</option>
                    <option value="2">Ali</option>
                </select>

            </div>


            <div class="mt-5">
                <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 hover:cursor-pointer">update</button>
            </div>
        </form>

    </div>

@endsection
