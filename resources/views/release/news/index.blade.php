@extends('layouts.front')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb container">
        <li class="breadcrumb-item">
            <a href="/">top</a>
        </li>
        <li class="breadcrumb-item ative" aria-current="page">
            News_index
        </li>
    <ol>
</nav>
<div class=py-3>
    <div class="container">
        <h3 class="mb-5">ニュース一覧</h3>
        <ul>
            @foreach($posts as $post)
                <li>
                    <div class=col-3>
                        <p>{{ $post->updated_at->format('Y年m月d日') }}</p>
                    </div>
                    <div class="col-9">
                        <a href="/news/articles/{{ $post->id }}">{{ $post->title }}</a>
                    </div>
                </li>
            @endforeach           
            </tbody>
        </ul>     
    </div>
</div>
@endsection
