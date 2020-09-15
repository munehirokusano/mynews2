@extends('layouts.front')

@section('content')

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">

<!-- styles -->
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
    
    <div class="container">
        <div class="text-center">
            <img src="{{ asset('images/sign.png') }}" class="img-fluid" alt="タイトル画面">
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



    <!-- <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="main-title">
                <h1 class="display-3"></h1>
            </div>
            <div class="sub-title">
                <p class="lead"></p>
            </div>
        </div>
    </div> -->

        <!-- <div id="main_visual" class="carousel side bg-dark" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main-visual" data-slide-to="0" class="active"></li>
                @foreach($postPictureTitles as $postPictureTitle)
                <li data-target="#main-visual"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @if (!is_null($PictureTitleHeadline))
                    <div class="carousel-item active">
                        @if ($PictureTitleHeadline->image_path)
                        <div class="text-center">
                            
                            <img class="img-fluid" src="{{ $PictureTitleHeadline->image_path }}" alt="画像1">
                        </div>
                        @endif
                        <div class="carousel-caption d-none d-md-block">
                            <h2>{{ str_limit($PictureTitleHeadline->title, 70) }}</h2>
                            <p>{{ str_limit($PictureTitleHeadline->sub_title, 70) }}</p>
                        </div>
                    </div>
                @endif
                @foreach($postPictureTitles as $postPictureTitle)
                    <div class="carousel-item">
                        <div class="text-center">
                            
                            <img class="img-fluid" src="{{ $postPictureTitle->image_path }}" alt="画像">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h2>{{ str_limit($postPictureTitle->title, 70) }}</h2>
                            <p>{{ str_limit($postPictureTitle->sub_title, 70) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
                <a class="carousel-control-prev" href="#main_visual" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">前に戻る</span>
                </a>
                <a class="carousel-control-next" href="#main_visual" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">次に進む</span>
                </a>
            </div>
        </div>
    </div> -->
    <!--  
    <div class="container">
     
    @foreach ($headlines as $headlineNumber => $headline)
        <div class="media mt-5">
            <div class="image mr-3">
            @if ($headline->image_path)
                <img src="{{ $headline->image_path }}">
            @endif
            </div>
            <div class="media-body">
                @if (!is_null($headline))
                <div class="title p-2">
                    <h1>{{ str_limit($headline->title, 70) }}</h1>
                </div>
                <div class="col-md-6">
                        @if ($headline === reset($headlines))
                            <p class="body mx-auto">
                                最新記事
                            </P>
                        @else
                            <p class="body mx-auto">
                                {{ $headline->updated_at->format('Y年m月d日') }}
                            </P>
                        @endif
                </div>
                <div class="col-md-6">
                    <p class="body mx-auto">{{ str_limit($headline->body, 650) }}</p>
                    <a class="navbar-brand" href="blogPage/{{ $headline->id }}">
                        もっと見る
                    </a>
                </div>
                @endif
            </div>    
        </div>
    @endforeach
    <div>
    -->
