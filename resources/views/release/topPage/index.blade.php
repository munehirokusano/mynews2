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
<div class="container">
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
    <div class="card-aria">
        <div class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card mb-3">
                            <div class="gymnastics_picture">
                                <img src="{{ asset('images/sample.jpg') }}"  class="img-fluid">
                                <div class="gymnastics_body">
                                    <img src="{{ asset('images/image1.png') }}" class="img-fluid">
                                </div>
                                <div class="gymnastics_button">
                                    <a class="card_button">詳細</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-3">
                            <div class="gymnastics_picture">
                                <img src="{{ asset('images/sample.jpg') }}"  class="img-fluid">
                                <div class="gymnastics_body">
                                    <img src="{{ asset('images/sample_card.png') }}" class="img-fluid">
                                </div>
                                <div class="gymnastics_button">
                                    <a class="card_button">詳細</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-3">
                            <div class="gymnastics_picture">
                                <img src="{{ asset('images/sample.jpg') }}"  class="img-fluid">
                                <div class="gymnastics_body">
                                    <img src="{{ asset('images/sample_card.png') }}" class="img-fluid">
                                </div>
                                <div class="gymnastics_button">
                                    <a class="card_button">詳細</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-3">
                            <div class="gymnastics_picture">
                                <img src="{{ asset('images/sample.jpg') }}"  class="img-fluid">
                                <div class="gymnastics_body">
                                    <img src="{{ asset('images/sample_card.png') }}" class="img-fluid">
                                </div>
                                <div class="gymnastics_button">
                                    <a class="card_button">詳細</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card mb-3">
                            <div class="gymnastics_picture">
                                <img src="{{ asset('images/sample.jpg') }}"  class="img-fluid">
                                <div class="gymnastics_body">
                                    <img src="{{ asset('images/sample_card.png') }}" class="img-fluid">
                                </div>
                                <div class="gymnastics_button">
                                    <a class="card_button">詳細</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-3">
                            <div class="gymnastics_picture">
                                <img src="{{ asset('images/sample.jpg') }}"  class="img-fluid">
                                <div class="gymnastics_body">
                                    <img src="{{ asset('images/sample_card.png') }}" class="img-fluid">
                                </div>
                                <div class="gymnastics_button">
                                    <a class="card_button">詳細</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-3">
                            <div class="gymnastics_picture">
                                <img src="{{ asset('images/sample.jpg') }}"  class="img-fluid">
                                <div class="gymnastics_body">
                                    <img src="{{ asset('images/sample_card.png') }}" class="img-fluid">
                                </div>
                                <div class="gymnastics_button">
                                    <a class="card_button">詳細</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-3">
                            <div class="gymnastics_picture">
                                <img src="{{ asset('images/sample.jpg') }}"  class="img-fluid">
                                <div class="gymnastics_body">
                                    <img src="{{ asset('images/sample_card.png') }}" class="img-fluid">
                                </div>
                                <div class="gymnastics_button">
                                    <a class="card_button">詳細</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <div class="py-4">
        <div class="container">
            <div class="row mb-3">
                <h2 class="movie-title">自宅でチャレンジしてみよう</h2>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ config('app.video_path.video_sample') }}" width=”780″ height=”439″ frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ config('app.video_path.video_sample') }}" width=”780″ height=”439″ frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ config('app.video_path.video_sample') }}" width=”780″ height=”439″ frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ config('app.video_path.video_sample') }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ config('app.video_path.video_sample') }}" width=”780″ height=”439″ frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ config('app.video_path.video_sample') }}" width=”780″ height=”439″ frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ config('app.video_path.video_sample') }}" width=”780″ height=”439″ frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ config('app.video_path.video_sample') }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection