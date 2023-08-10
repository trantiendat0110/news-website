@extends('layouts.layout')
@section('content')
    <div class="text-center m-20">
        <h3 class="font-bold text-xl">{{ $post->tieuDe }}</h3>
        <p class="">{{ $post->noiDung }}</p>
    </div>
@endsection
