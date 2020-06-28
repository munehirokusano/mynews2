@extends('layouts.front')

@section('content')
    <div class="container">
        <div id="main_visual" class="carousel side" data-ride="carousel">
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
                            <img class="img-fluid" src="{{ asset('storage/image/' . $PictureTitleHeadline->image_path) }}" alt="画像1" style="max-height: 50%; max-width: 50%">
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
                            <img class="img-fluid" src="{{ asset('storage/image/' . $postPictureTitle->image_path) }}" alt="画像"　style="max-height: 50%; max-width: 50%">
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
                <span class="sr-only" style="color:#000;">前に戻る</span>
            </a>
            <a class="carousel-control-next" href="#main_visual" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">次に進む</span>
            </a>
        </div>
    </div>
    
    <!--<div class="container">-->
    <!--    <hr color="#c0c0c0">-->
    <!--    @if (!is_null($headline))-->
    <!--        <div class="row">-->
    <!--            <div class="headline col-md-10 mx-auto">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-6">-->
    <!--                        <div class="caption mx-auto">-->
    <!--                            <div class="image">-->
    <!--                                @if ($headline->image_path)-->
    <!--                                    <img src="{{ $headline->image_path }}">-->
    <!--                                @endif-->
    <!--                            </div>-->
    <!--                            <div class="title p-2">-->
    <!--                                <h1>{{ str_limit($headline->title, 70) }}</h1>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-6">-->
    <!--                        <p class="body mx-auto">{{ str_limit($headline->body, 650) }}</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    @endif-->
    <!--    <hr color="#c0c0c0">-->
    <!--    <div class="row">-->
    <!--        <div class="posts col-md-8 mx-auto mt-3">-->
    <!--            @foreach($posts as $post)-->
    <!--                <div class="post">-->
    <!--                    <div class="row">-->
    <!--                        <div class="text col-md-6">-->
    <!--                            <div class="date">-->
    <!--                                {{ $post->updated_at->format('Y年m月d日') }}-->
    <!--                            </div>-->
    <!--                            <div class="title">-->
    <!--                                {{ str_limit($post->title, 150) }}-->
    <!--                            </div>-->
    <!--                            <div class="body mt-3">-->
    <!--                                {{ str_limit($post->body,1500) }}-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="image col-md-6 text-right mt-4">-->
    <!--                            @if ($post->image_path)-->
    <!--                                <img src="{{ $post->image_path }}">-->
    <!--                            @endif-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <hr color="#c0c0c0">-->
    <!--            @endforeach-->
    <!--        </div>    -->
    <!--    </div>-->
    <!--</div>-->
    
    <div class="container">
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
                    <p class="body mx-auto">最新記事</p>
                </div>
                <div class="col-md-6">
                    <p class="body mx-auto">{{ str_limit($headline->body, 650) }}</p>
                </div>
                @endif
            </div>    
        </div>
        @foreach($posts as $post)
        <div class="media mt-3">
            <div class="image mr-3">
                @if ($post->image_path)
                    <img src="{{ $post->image_path }}">
                @endif
            </div>
            <div class="media-body">
                <div class="title">
                    <h1>{{ str_limit($post->title, 150) }}</h1>
                </div>
                <div class="date">
                    <p>{{ $post->updated_at->format('Y年m月d日') }}</p>
                </div>
                <div class="body">
                    <p>{{ str_limit($post->body,1500) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    <div>
@endsection