@extends('layouts.app')

@section('title', 'index')




@section('content')

    <div class="max-w-7xl  mx-auto">
        <div class=" flex items-center justify-end mb-5">

            <a class="text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800"
               href="{{route('posts.create')}}">Create Post</a>
        </div>
        <div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-300">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Posted By
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created At
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($posts as $post)

                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200 dark:text-white">
                            <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$post['id']}}
                            </th>
                            <td class="px-6 py-3">
                                {{$post->title}}
                            </td>
                            <td class="px-6 py-3">
                                {{$post->user->name}}
                            </td>
                            <td class="px-6 py-3">
                                {{$post->created_at->format('Y-m-d')}}
                            </td>
                            <td class="px-6 py-3">
                                <a href="{{route('posts.show',$post->id)}}" class="bg-cyan-600 px-2 py-2 m-1 rounded text-white font-medium  hover:underline">View</a>
                                <a href="{{route('posts.edit',$post->id)}}" class="bg-blue-600 px-2 py-2 m-1 rounded text-white
                                 font-medium hover:underline">Edit</a>

                                <form class="inline" method="POST" action="{{route('posts.destroy',$post->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 px-2 py-2 m-1 rounded text-white font-medium  hover:underline">delete</button>
                                </form>


                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
