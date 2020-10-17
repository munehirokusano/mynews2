@extends('layouts.admin')

@section('title' , '管理画面一覧')

@section('content')
<div class="container">
    <div class="row mb-3">
        <h2>管理画面一覧</h2>
    </div>
    <div class="row mb-3">
        <div class="col-md-4">
            <div class="card bg-primary mb-3">
                <div class="card-body">
                    <h4 class="card-title">登録者一覧</h4>
                    <p class="card-text">管理者の登録や削除を行う画面です</p>
                    <a href="{{ route('admin.user') }}" class="btn btn-light">確認</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-primary mb-3">
                <div class="card-body">
                    <h4 class="card-title">お問い合わせ一覧</h4>
                    <p class="card-text">お問い合わせを確認する画面です。</p>
                    <a href="{{ route('admin.contact') }}" class="btn btn-light">確認</a>
                </div>
            </div>
        </div> 
    </div> 
</div>
@endsection