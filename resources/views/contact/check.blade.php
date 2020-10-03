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
                    <input type="hidden" name="contact_name" value="{{ $item['contact_name'] }}">
                        <th scope="row">お名前</th>
                        <td>{{ $item['contact_name'] }}</td>
                    </tr>
                    <tr class="table-success">
                    <input type="hidden" name="contact_email" value="{{ $item['contact_email'] }}">
                        <th scope="row">メールアドレス</th>
                        <td>{{ $item['contact_email'] }}</td>
                    </tr>
                    <input type="hidden" name="contact_course" value="{{ $contact_course }}">
                    <tr class="table-success">
                        <th scope="row">体験コース</th>
                        <td>{{ $contact_course }}</td>
                    </tr>
                    <tr class="table-success">
                    <input type="hidden" name="contact_area" value="{{ $contact_area }}">
                        <th scope="row">お住まい</th>
                        <td>{{ $contact_area }}</td>
                    </tr>
                    <tr class="table-success">
                    <input type="hidden" name="contact_message" value="{{ $item['contact_message'] }}">
                        <th scope="row">お問い合わせ内容</th>
                        <td>{{ $item['contact_message'] }}</td>
                    </tr>                
                </tbody>
            </table>
            <div class="form-group row justify-content-center">
                <button type="button" class="btn btn-primary mr-5" onclick="history.back()">　戻る　</button>
                <button type="submit" class="btn btn-primary">送信する</button>
            </div>
        </form>
    </div>
</div>
@endsection
