@extends('layouts.app')

@section('title', 'show')




@section('content')

<div class="border border-gray-400 my-5 rounded-xl">
    <h2 class="bg-gray-200 px-2 py-3 rounded-t-xl text-lg">post Info</h2>
    <div class="px-2 py-2">
        <p class="font-semibold text-xl ">Title: PHP</p>
        <p class="text-lg">postText: </p>
        <p>
            hallo hier finden Sie den Text
        </p>
    </div>

</div>

<div class="border border-gray-400 my-5 rounded-xl">
    <h2 class="bg-gray-200 px-2 py-3 rounded-t-xl text-lg">Post creater info</h2>
    <div class="px-2 py-2">
        <p class="font-semibold text-lg ">Name: Ahmed</p>
        <p class="text-base">Email: ahmedghaleb@gmail.com</p>
        <p class="text-base">Created At: Thrusday 25th of August 2023 02:15:16 PM</p>
    </div>

</div>

@endsection
