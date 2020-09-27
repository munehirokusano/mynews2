@extends('layouts.admin')

@section('title' , '問い合わせ一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>お問い合わせ一覧</h2>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="10%">名前</th>
                                <th width="10%">email</th>
                                <th width="20%">希望コース</th>
                                <th width="10%">住まい</th>
                                <th width="35%">お問い合わせ内容</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <th>{{ $item->id }}</th>
                                    <td>{{ $item->contact_name }}</td>
                                    <td>{{ $item->contact_email }}</td>
                                    <td>{{ $item->contact_course }}</td>
                                    <td>{{ $item->contact_area }}</td>
                                    <td>{{ $item->contact_message }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\ContactController@delete', ['id' => $item->id]) }}">削除</a>
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