<?php

namespace App\Http\Controllers\Release;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Cache;
use App\News;
use App\Information;

class TopPageController extends Controller
{
    public function index(Request $request)
    {
        // newsのheadline
        $minutes = 10;

        // キャッシュさせて表示を早くする。データベースにアクセスしない。
        $news_posts = Cache::remember(__METHOD__, $minutes, function () {
            return News::all()->sortByDesc('updated_at');
        });

        $i = 0;
        // ニュースを三件まで追加
        $news_headlines = [];
        
        foreach ($news_posts as $news_post) {
            if ($i > 2) {
                break;
            }
            $news_headlines[] = $news_posts->shift();
            $i++;
        }

        // informationのheadline
        $minutes = 10;

        // キャッシュさせて表示を早くする。データベースにアクセスしない。
        $information_posts =  Information::all()->sortByDesc('updated_at');

        $i = 0;
        // お知らせを三件まで追加
        $information_headlines = [];
        
        foreach ($information_posts as $information_post) {
            if ($i > 2) {
                break;
            }
            $information_headlines[] = $information_posts->shift();
            $i++;
        }

        return view('release.topPage.index', [
            'news_headlines' => $news_headlines,
            'information_headlines' => $information_headlines,
        ]);
    }

    // public function index(Request $request)
    // {
    //     $minutes = 10;

    //     // キャッシュさせて表示を早くする。データベースにアクセスしない。
    //     $posts = Cache::remember(__METHOD__, $minutes, function () {
    //         return News::all()->sortByDesc('updated_at');
    //     });

    //     $news_headlines = [];

    //     // ニュースを三件まで追加
    //     outputNewsHeadlines($news_headlines);        

    //     return view('release.topPage.index', [
    //         'news_headlines' => $news_headlines,
    //     ]);
    // }
    
    // function outputNewsHeadlines($headlines) 
    // {
    //     $i = 0;
            
    //     foreach ($posts as $post) {
    //         if ($i > 2) {
    //             break;
    //         }
    //         $headlines[] = $posts->shift();
    //         $i++;
    //     }
    //     return $headlines;
    // }
}
