@extends('layouts.front')

@section('content')

<div class="container">
    <div class="date">
        {{ $post->updated_at->format('Y年m月d日') }}
    </div>
    <div class="title">
        {{ str_limit($post->title, 150) }}
    </div>
    <div class="image">
        @if ($post->file_path)
            <a href="{{ $post->file_path }}">ファイルを表示する</a>
        @endif
    </div>
    <div class="body mt-3">
        {{ str_limit($post->body, 1500) }}
    </div>
</div>

@endsection