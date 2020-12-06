@extends('layouts.front')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb container">
        <li class="breadcrumb-item">
            <a href="/">top</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('informationIndex') }}">information</a>
        </li>
        <li class="breadcrumb-item ative" aria-current="page">
            article
        </li>
    <ol>
</nav>

<div class="container">
    <div class="date">
        {{ $post->updated_at->format('Y年m月d日') }}
    </div>
    <div class="title">
        @if ($post->file_path)
            <a href="{{ $post->file_path }}">{{ str_limit($post->title, 150) }}</a>
            <span>    
                <img src="{{ asset('images/PDF_Icon.png') }}"  class="img-fluid">
            </span>
        @else
            {{ str_limit($post->title, 150) }}
        @endif
    </div>
</div>

@endsection