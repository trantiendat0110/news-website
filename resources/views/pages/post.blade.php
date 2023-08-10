@extends('layouts.layout')
@section('content')
    <div class="m-4">
        <button id="btn_add_post" class="bg-slate-900 text-white px-4 py-1 rounded my-10 hover:opacity-80">Add post</button>
        @livewire('form', ['action' => route('create.post'), 'inputs' => [['name' => 'title', 'label' => 'Title'], ['name' => 'categories', 'label' => 'Categories', 'option' => ['categories' => $categories]], ['name' => 'summary', 'label' => 'Summary'], ['name' => 'content', 'label' => 'Content']], 'id_form' => 'form_create_post', 'title' => 'Add post'])
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
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Categories
                    </th>
                    <th scope="col" class="px-6 py-3 w-1/5">
                        Edit
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                    <tr class="bg-white border-b-2 border-slate-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->created_at }}

                        </td>
                        <td class="px-6 py-4">
                            {{ $item->category }}

                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('delete.post') }}" method="POST">
                                @csrf <!-- {{ csrf_field() }} -->
                                <input type="text" class="hidden" name="id_post" value="{{ $item->id }}">
                                <button  class="btn_delete_post py-1 p-2 ml-2 rounded hover:text-red-600">Delete</button>
                            </form>
                            <button class="py-1 p-2 ml-2 rounded hover:text-yellow-600">Edit</button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
