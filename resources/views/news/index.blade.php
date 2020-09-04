@extends('layouts.front')

@section('content')
    <div class="container">
        <div id="main_visual" class="carousel side bg-dark" data-ride="carousel">
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
                            <!--<img src="{{ asset('storage/image/' . $PictureTitleHeadline->image_path) }}" alt="画像1">-->
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
                            <!--<img src="{{ asset('storage/image/' . $postPictureTitle->image_path) }}" alt="画像">-->
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
    </div>
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
@endsection