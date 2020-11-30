@extends('layouts.front')

@section('content')

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">

<!-- styles -->
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
    
    <div class="row no-gutters justify-content-center">
        <img src="{{ config('app.image_path.top_image') }}" class="img-fluid" alt="タイトル画面">
    </div>
    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h3><a href="{{ route('informationIndex') }}">Informtion</a></h3>
                </div>
                <div class="col-md-10">
                    <dl class="row">
                        @foreach($information_headlines as $information_headline)
                            <dt class="col-md-3">{{ $information_headline->updated_at->format('Y年m月d日') }}</dt>
                            <dd class="col-md-9">{{ $information_headline->title }}<br><a href="/information/articles/{{ $information_headline->id }}">詳しく見る</a></dd>
                        @endforeach
                    </dl>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <h3><a href="{{ route('newsIndex') }}">News</a></h3>
                </div>
                <div class="col-md-10">
                    <dl class="row">
                        @foreach($news_headlines as $news_headline)
                            <dt class="col-md-3">{{ $news_headline->updated_at->format('Y年m月d日') }}</dt>
                            <dd class="col-md-9">{{ $news_headline->title }}<br><a href="/news/articles/{{ $news_headline->id }}">詳しく見る</a></dd>
                        @endforeach
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="card-aria">
        <div class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <img src="{{ asset('images/sample.jpg') }}" class="img-fluid">
                            <div class="card-body d-flex justify-content-between">
                                <h4 class="card-title">新体操</h4>
                                <button type="button" class="btn btn-secondary">詳しく見る</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <img src="{{ asset('images/sample.jpg') }}" class="img-fluid">
                            <div class="card-body d-flex justify-content-between">
                                <h4 class="card-title">器械体操</h4>
                                <button type="button" class="btn btn-secondary">詳しく見る</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <img src="{{ asset('images/sample.jpg') }}" class="img-fluid">
                            <div class="card-body d-flex justify-content-between">
                                <h4 class="card-title">体育ｸﾗｽ</h4>
                                <button type="button" class="btn btn-secondary">詳しく見る</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <img src="{{ asset('images/sample.jpg') }}" class="img-fluid">
                            <div class="card-body d-flex justify-content-between">
                                <h4 class="card-title">極真空手</h4>
                                <button type="button" class="btn btn-secondary">詳しく見る</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <img src="{{ asset('images/sample.jpg') }}" class="img-fluid">
                            <div class="card-body d-flex justify-content-between">
                                <h4 class="card-title">ｸﾗｼｯｸﾊﾞﾚｴ</h4>
                                <button type="button" class="btn btn-secondary">詳しく見る</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <img src="{{ asset('images/sample.jpg') }}" class="img-fluid">
                            <div class="card-body d-flex justify-content-between">
                                <h4 class="card-title">大人のｸﾗｼｯｸﾊﾞﾚｴ</h4>
                                <button type="button" class="btn btn-secondary">詳しく見る</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <img src="{{ asset('images/sample.jpg') }}" class="img-fluid">
                            <div class="card-body d-flex justify-content-between">
                                <h4 class="card-title">ﾀﾞﾝｽ・ﾁｱ</h4>
                                <button type="button" class="btn btn-secondary">詳しく見る</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <img src="{{ asset('images/sample2.jpg') }}" class="img-fluid">
                            <div class="card-body d-flex justify-content-between">
                                <h4 class="card-title">健美操</h4>
                                <button type="button" class="btn btn-secondary">詳しく見る</button>
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