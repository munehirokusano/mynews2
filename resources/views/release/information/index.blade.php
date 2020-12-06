@extends('layouts.front')

@section('content')

<link href="{{ asset('css/index.css') }}" rel="stylesheet">

<nav aria-label="breadcrumb">
    <ol class="breadcrumb container">
        <li class="breadcrumb-item">
            <a href="/">top</a>
        </li>
        <li class="breadcrumb-item ative" aria-current="page">
            Information
        </li>
    <ol>
</nav>
<div class=py-3>
    <div class="container">
        <h3 class="mb-5">お知らせ一覧</h3>
        <ul>
            @foreach($posts as $post)
                <li>
                    <div class=col-3>
                        <p>{{ $post->updated_at->format('Y年m月d日') }}</p>
                    </div>
                    <div class="col-9">
                        <a href="{{ $post->file_path }}">{{ str_limit($post->title, 150) }}</a>
                        <span>    
                            <img src="{{ asset('images/PDF_Icon.png') }}"  class="img-fluid">
                        </span>
                    </div>
                </li>
            @endforeach 
                {{ $posts->links() }}         
            </tbody>
        </ul>     
    </div>
</div>
@endsection