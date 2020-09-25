@extends('layouts.front')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb container">
        <li class="breadcrumb-item">
            <a href="/">top</a>
        </li>
        <li class="breadcrumb-item ative" aria-current="page">
            Check
        </li>
    <ol>
</nav>
<div class=py-3>
    <div class="container">
        <h3 class="mb-5">ご確認</h3>
        <form action="{{ action('Release\ContactController@create') }}" method="post" enctype="multipart/form-data">
            @csrf        
        <form>
            <table class="table table-bordered mb-5">
                <tbody>
                    <tr class="table-success">
                    <input type="hidden" name="name" value="{{ $item['name'] }}">
                        <th scope="row">お名前</th>
                        <td>{{ $item['name'] }}</td>
                    </tr>
                    <tr class="table-success">
                    <input type="hidden" name="email" value="{{ $item['email'] }}">
                        <th scope="row">メールアドレス</th>
                        <td>{{ $item['email'] }}</td>
                    </tr>
                    @foreach($courses as $course)
                        <input type="hidden" name="course[]" value="{{ $course }}">
                        <tr class="table-success">
                            <th scope="row">体験コース</th>
                            <td>{{ $course }}</td>
                        </tr>
                    @endforeach
                    <tr class="table-success">
                    <input type="hidden" name="area" value="{{ $area }}">
                        <th scope="row">お住まい</th>
                        <td>{{ $area }}</td>
                    </tr>
                    <tr class="table-success">
                        <th scope="row">お問い合わせ内容</th>
                        <td>{{ $item['message'] }}</td>
                    </tr>                
                </tbody>
            </table>
            <div class="form-group row justify-content-center">
                <button type="submit" class="btn btn-primary mr-5">送信する</button>
                <button type="button" class="btn btn-primary" onclick="history.back()">　戻る　</button>
            </div>
        </form>
    </div>
</div>
@endsection
