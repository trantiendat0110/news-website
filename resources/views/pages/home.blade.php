@extends('layouts.layout')
@section('content')
    <div class="w-full bg-slate-50 h-screen">
        <section class="p-10">
            <div class="flex grid-col justify-between">
                @livewire('box-home-navigration', ['name' => 'posts', 'quantity' => 100, 'color' => 'from-cyan-500 to-blue-500 shadow-cyan-600'])
                @livewire('box-home-navigration', ['name' => 'categories', 'quantity' => 100, 'color' => 'from-amber-500 to-red-500 shadow-amber-600'])
                @livewire('box-home-navigration', ['name' => 'comments', 'quantity' => 100, 'color' => 'from-green-500 to-lime-500 shadow-green-600'])
                @livewire('box-home-navigration', ['name' => 'accounts', 'quantity' => 100, 'color' => 'from-violet-500 to-blue-500  shadow-violet-600'])
            </div>
            <hr class="mt-10 border-2 border-slate-900 rounded">
            <div class="relative overflow-x-auto">
                <h3
                    class="text-2xl my-10 hover:text-red-600 hover:decoration-red-600 hover:decoration-slice hover:underline">
                    <a href="/posts">Posts</a></h3>
                <table class="w-full text-left text-gray-500 dark:text-gray-400">
                    <thead class=" text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Views
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['posts'] as $item)
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->title }}

                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->views }}

                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->created_at }}

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <br>
            <hr>
            <div class="relative overflow-x-auto">
                <h3 class="text-2xl my-10 hover:text-red-600 hover:decoration-red-600 hover:underline"><a
                        href="/categories">Categories</a></h3>
                <table class="w-full text-left text-gray-500 dark:text-gray-400">
                    <thead class=" text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Views
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['categories'] as $item)
                            <tr class="bg-white border-b-2 border-slate-200">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->description }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->created_at }}

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </section>
    </div>
@stop
