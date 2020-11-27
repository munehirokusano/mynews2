@extends('layouts.admin')
@section('title', 'お知らせの編集')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>お知らせの編集</h2>
            <form action="{{ action('Admin\InformationController@update') }}" method="post"  enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2" for="title">タイトル</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" value="{{ $information_form->title }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="body">本文</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="body" rows="20">{{ $information_form->body }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="file">ファイル</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="file">
                        <div class="form-text text-info">
                            設定中: {{ $information_form->file_path }}
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="remove" value="true">ファイルを削除
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-10">
                        <input type="hidden" name="id" value="{{ $information_form->id }}">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="更新">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection