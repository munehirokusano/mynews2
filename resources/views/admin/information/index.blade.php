@extends('layouts.admin')
@section('title', '登録済みお知らせの一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>お知らせ一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\InformationController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\InformationController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="70%">タイトル</th>
                                <th width="20%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $information)
                                <tr>
                                    <th>{{ $information->id }}</th>
                                    <td>
                                        <a href="{{ $information->file_path }}">{{ str_limit($information->title, 150) }}</a>
                                        <span>    
                                            <img src="{{ asset('images/PDF_Icon.png') }}"  class="img-fluid">
                                        </span>
                                    </td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\InformationController@edit', ['id' => $information->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\InformationController@delete', ['id' => $information->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection