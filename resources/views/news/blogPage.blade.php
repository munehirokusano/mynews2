@extends('layouts.front')

@section('content')

    <div class="container">
        <div class="media-body">
            <div class="title p-2">
                <h1>{{ str_limit($blogPage->title, 70) }}</h1>

            </div>
        </div>
    </div>

@endsection