<?php

namespace App\Http\Controllers\Release;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Cache;
use App\Information;

class InformationController extends Controller
{
    // 記事一覧表示
    public function index()
    {
        $minutes = 10;

        // キャッシュさせて表示を早くする。データベースにアクセスしない。
        $posts = Cache::remember(__METHOD__, $minutes, function () {
            return Information::orderBy('updated_at', 'desc')->paginate(2);
        });

        // 日付の挙動がわからない。
        // $posts = DB::table('informations')->simplePaginate(1);

        return view('release.information.index', [
            'posts' => $posts,
        ]);  
    }

    // idから記事を検索して表示
    public function articles($id)
    {
        $post = Information::find($id);

        return view('release.information.articles', [
            'post' => $post,
        ]);
    }
}
