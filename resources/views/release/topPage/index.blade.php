@extends('layouts.front')

@section('content')

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">

<!-- styles -->
<link href="{{ asset('css/index.css') }}" rel="stylesheet">

{{--  main-image-area  --}}
<div class="mb-3">
    <div class="row no-gutters justify-content-center">
        <img src="{{ config('app.image_path.top_image') }}" class="img-fluid" alt="タイトル画面">
    </div>
</div>
{{--  informtion,news-area  --}}
<div class="container pt-3 pb-3">
    <h2 class="movie-title">お知らせ</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr class="table-light">
                    <th width="30%" scope="col">Informtion</th>
                    <th width="70%" scope="col"><div class="text-right"><a href="{{ route('informationIndex') }}">一覧表示</a></div></th>                       
                </tr>
            </thead>
            <tbody>
                @foreach($information_headlines as $information_headline)
                    <tr class="table-light">
                        <th scope="row">{{ $information_headline->updated_at->format('Y年m月d日') }}</th>
                        <td>
                            <a href="{{ $information_headline->file_path }}">{{ str_limit($information_headline->title, 150) }}</a>
                            <span>    
                                <img src="{{ asset('images/PDF_Icon.png') }}"  class="img-fluid">
                            </span>                             
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr class="table-light">
                    <th width="30%" scope="col">News</th>
                    <th width="70%" scope="col"><div class="text-right"><a href="{{ route('newsIndex') }}">一覧表示</a></div></th>
                </tr>
            </thead>
            <tbody>
                @foreach($news_headlines as $news_headline)
                <tr class="table-light">
                    <th scope="row">{{ $news_headline->updated_at->format('Y年m月d日') }}</th>
                    <td><a href="/news/articles/{{ $news_headline->id }}">{{ $news_headline->title }}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>  
{{--  card-area  --}}
<div class="container">
    <h2 class="movie-title">コース紹介</h2>
    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapseCourse" aria-expanded="false" aria-controls="collapseCourse">
        表示する
    </button>
    <div class="collapse" id="collapseCourse">
        <div class="row">
            @foreach($courses as $course)
                <div class="col-auto mx-auto mb-3 picture_frame ">
                    <div class="course_picture">
                        @if ($course->image_path)
                            <img src="{{ $course->image_path }}">
                        @endif
                        <p class="course_title">{{ $course->title }}</p>
                        <a href="#" class="card_button">詳細</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
{{--  movie-area  --}}
<div class="py-4">
    <div class="container">
        <h2 class="movie-title">自宅でチャレンジしてみよう</h2>
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapseMovie" aria-expanded="false" aria-controls="collapseMovie">
            表示する
        </button>
        <div class="collapse" id="collapseMovie">
            <div class="row">
                <div class="movie-li">
                    <div class="embed-responsive embed-responsive-4by3 col-auto mx-auto picture_frame">
                        <iframe class="embed-responsive-item" src="{{ config('app.video_path.video_sample') }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="movie-li">
                    <div class="embed-responsive embed-responsive-4by3 col-auto mx-auto picture_frame">
                        <iframe class="embed-responsive-item" src="{{ config('app.video_path.video_sample') }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection
