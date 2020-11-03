@extends('layouts.front')

@section('content')

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">

<!-- styles -->
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
    
    <div class="container">
        <div class="text-center">
            <img src="{{ config('app.image_path.top_image') }}" class="img-fluid" alt="タイトル画面">
        </div>
    </div>
    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h3>News</h3>
                </div>
                <div class="col-md-10">
                    <dl class="row">
                        <dt class="col-md-3">最新記事</dt>
                        <dd class="col-md-9">新型コロナウイルスについて</dd>
                        <dt class="col-md-3">2019年8月28日</dt>
                        <dd class="col-md-9">営業時間短縮について</dd>
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
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3Zuc5zIRaxY" width=”780″ height=”439″ frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3Zuc5zIRaxY" width=”780″ height=”439″ frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3Zuc5zIRaxY" width=”780″ height=”439″ frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3Zuc5zIRaxY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3Zuc5zIRaxY" width=”780″ height=”439″ frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3Zuc5zIRaxY" width=”780″ height=”439″ frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3Zuc5zIRaxY" width=”780″ height=”439″ frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3Zuc5zIRaxY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection