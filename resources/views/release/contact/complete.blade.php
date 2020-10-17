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
        <h3 class="mb-5">送信しました。</h3>
        <div class="form-group row justify-content-center">
            <button type="button" class="btn btn-primary" onClick="location.href='/';">　HOME　</button>
        </div>      
    </div>
</div>
@endsection