@extends('layouts.front')

@section('content')

<!-- styles -->
<link href="{{ asset('css/index.css') }}" rel="stylesheet">

<nav aria-label="breadcrumb">
    <ol class="breadcrumb container">
        <li class="breadcrumb-item">
            <a href="/">top</a>
        </li>
        <li class="breadcrumb-item ative" aria-current="page">
            Contact
        </li>
    <ol>
</nav>
<div class=py-3>
    <div class="container">
        <h3 class="mb-5">お問い合わせ・無料体験申し込みフォーム</h3>
        <form action="{{ action('Release\ContactController@check') }}" method="post" enctype="multipart/form-data">
                    
                    @if (count($errors) > 0)
                        <ul>
                            
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
        <form>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label">
                    お名前 <span class="badge badge-warning">必須</span>
                </label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="name" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label">
                    メールアドレス <span class="badge badge-warning">必須</span>
                </label>
                <div class="col-md-4">
                    <input type="email" class="form-control" id="email" required>
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-md-4">
                        体験したいコースを選択してください。(複数可)<span class="badge badge-warning">必須</span>
                    </legend>
                    <div class="col-md-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="questionnaire" id="check1" value="answer1">
                            <label class="form-check-label" for="check1">新体操コース</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="questionnaire" id="check2" value="answer2">
                            <label class="form-check-label" for="check2">体操コース</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="questionnaire" id="check3" value="answer3">
                            <label class="form-check-label" for="check3">空手コース</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="questionnaire" id="check4" value="answer4">
                            <label class="form-check-label" for="check4">クラシックバレエコース</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="questionnaire" id="check5" value="answer5">
                            <label class="form-check-label" for="check5">ダンスコース</label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-md-4">
                        お住いの地域をお選びください。<span class="badge badge-warning">必須</span>
                    </legend>
                    <div class="col-md-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="questionnaire" id="radio1" value="answer1">
                            <label class="form-check-label" for="radio1">宇都宮市</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="questionnaire" id="radio2" value="answer2">
                            <label class="form-check-label" for="radio2">小山市</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="questionnaire" id="radio3" value="answer3">
                            <label class="form-check-label" for="radio3">真岡市</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="questionnaire" id="radio4" value="answer4">
                            <label class="form-check-label" for="radio4">下野市</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="questionnaire" id="radio5" value="answer5">
                            <label class="form-check-label" for="radio5">栃木市</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="questionnaire" id="radio6" value="answer6">
                            <label class="form-check-label" for="radio6">その他地域</label>
                            <input type="text" class="form-control" id="name" value="入力" required>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label">
                    お問い合わせ内容 <span class="badge badge-warning">必須</span>
                </label>
                <div class="col-md-8">
                    <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary">送信する</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection


