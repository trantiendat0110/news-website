@extends('layouts.layout')
@section('content')
    <div class="w-full bg-slate-50 h-screen">
        <section class="m-4">
            <button id="btn_add_category" class="bg-slate-900 text-white px-4 py-1 rounded my-10 hover:opacity-80">Add
                category</button>
            @livewire('form', ['action' => route('create.category'), 'inputs' => [['name' => 'desc', 'label' => 'Description']], 'id_form' => 'form_create_category', 'title' => 'Add category'])
            <h3 class="text-2xl my-10">Categories</h3>
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
                        <th scope="col" class="px-6 py-3 w-1/5">
                            Edit
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
                            <td class="px-6 py-4">
                                <form action="{{ route('delete.category') }}" method="POST">
                                    @csrf <!-- {{ csrf_field() }} -->
                                    <input type="text" class="hidden" name="id_category" value="{{ $item->id }}">
                                    <button class="btn_delete_category py-1 p-2 ml-2 rounded hover:text-red-600">Delete</button>
                                </form>
                                <button class="py-1 p-2 ml-2 rounded hover:text-yellow-600">Edit</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </section>
    </div>
@stop
