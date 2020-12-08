@extends('layouts.admin')
@section('title' , '登録済みコースの一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>コース一覧</h2>
        </div>
        <div class="row">
            <a href="{{ action('Admin\CourseController@add') }}" role="button" class="btn btn-primary">新規作成</a>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="80%">タイトル</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $course)
                                <tr>
                                    <th>{{ $course->id }}</th>
                                    <td>{{ \Str::limit($course->title, 100) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\CourseController@edit', ['id' => $course->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\CourseController@delete', ['id' => $course->id]) }}">削除</a>
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