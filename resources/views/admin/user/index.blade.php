@extends('layouts.admin')

@section('title' , '登録者一覧')

@section('content')
<div class="container">
    <div class="row mb-3">
        <h2>御登録者一覧</h2>
    </div>
    <div class="row mb-3">
        <div class="col-md-4">
            <a href="{{ route('register') }}" role="button" class="btn btn-primary mb-3">新規登録</a>
        </div>
        <div class="col-md-8">
            <form action="{{ action('Admin\UserController@index') }}" method="get">
                <div class="form-group row mb-3">
                    <div class="col-8">
                        <input type="text" size="10" class="form-control" name="cond_name" value="{{ $cond_name }}">
                    </div>
                    <div class="col-4">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="名前検索">
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
                            <th width="25%">ID</th>
                            <th width="25%">名前</th>
                            <th width="25%">email</th>
                            <th width="25%">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <form action="{{ action('Admin\UserController@roleup', ['id' => $user->id]) }}" method="post">
                                    @csrf
                                        <input type="submit" name="roleup" value="管理者権限" onClick="confirm('管理者権限を付与しますか？');return true;">
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ action('Admin\UserController@delete', ['id' => $user->id]) }}" method="post">
                                    @csrf
                                        <input type="submit" name="delete" value="削除" onClick="confirm('本当に削除してもよろしいですか？');return true;">
                                    </form>
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