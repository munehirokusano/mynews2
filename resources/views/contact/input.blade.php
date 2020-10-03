@extends('layouts.front')

@section('content')

<!-- styles -->
<link href="{{ asset('css/index.css') }}" rel="stylesheet">

<!-- script -->
<script src="{{ asset('js/contact.js') }}" defer></script>

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
            @csrf        
            @if (count($errors) > 0)
                <ul>
                    
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
        <form>
            <div class="form-group row">
                <label for="contact_name" class="col-md-4 col-form-label">
                    お名前 <span class="badge badge-warning">必須</span>
                </label>
                <div class="col-md-4">
                    <input type="text" name="contact_name" class="form-control" id="contact_name" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="contact_email" class="col-md-4 col-form-label">
                    メールアドレス <span class="badge badge-warning">必須</span>
                </label>
                <div class="col-md-4">
                    <input type="email" name="contact_email" class="form-control" id="contact_email" required>
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-md-4">
                        体験したいコースを選択してください。(複数可)<span class="badge badge-warning">必須</span>
                    </legend>
                    <div class="col-md-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="contact_course[]" id="check1" value="新体操コース">
                            <label class="form-check-label" for="check1">新体操コース</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="contact_course[]" id="check2" value="体操コース">
                            <label class="form-check-label" for="check2">体操コース</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="contact_course[]" id="check3" value="空手コース">
                            <label class="form-check-label" for="check3">空手コース</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="contact_course[]" id="check4" value="クラシックバレエコース">
                            <label class="form-check-label" for="check4">クラシックバレエコース</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="contact_course[]" id="check5" value="ダンスコース">
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
                            <input class="form-check-input" type="radio" name="contact_area" id="radio1" value="宇都宮市">
                            <label class="form-check-label" for="radio1">宇都宮市</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="contact_area" id="radio2" value="小山市">
                            <label class="form-check-label" for="radio2">小山市</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="contact_area" id="radio3" value="真岡市">
                            <label class="form-check-label" for="radio3">真岡市</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="contact_area" id="radio4" value="下野市">
                            <label class="form-check-label" for="radio4">下野市</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="contact_area" id="radio5" value="栃木市">
                            <label class="form-check-label" for="radio5">栃木市</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="contact_area" id="radio6" value="6">
                            <label class="form-check-label" for="radio6">その他地域</label>
                            <input type="text" name="contact_text" class="form-control" id="contact_text" value="">
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="contact_message" class="col-md-4 col-form-label">
                    お問い合わせ内容 <span class="badge badge-warning">必須</span>
                </label>
                <div class="col-md-8">
                    <textarea class="form-control" id="contact_message" name="contact_message" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary">確認する</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection


