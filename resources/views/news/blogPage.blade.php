@extends('layouts.front')

@section('content')

    <div class="container">
        <div class="media-body">
            <div class="title p-2">
                <h1>{{ str_limit($blogPage->title, 70) }}</h1>
                <img src="{{ asset('storage/image/' . 新体操(1).jpg }}" alt="画像">
            </div>
        </div>
    </div>

@endsection