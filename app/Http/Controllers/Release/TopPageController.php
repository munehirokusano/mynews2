<?php

namespace App\Http\Controllers\Release;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Cache;
use App\News;
use App\Information;

class TopPageController extends Controller
{
    protected $minutes = 10;

    public function index()
    {      
        // ニュースを三件まで追加
        $news_headlines = $this->outputNewsHeadlines();

        $information_headlines = $this->outputInformationHeadlines();
        
        return view('release.topPage.index', [
            'news_headlines' => $news_headlines,
            'information_headlines' =>$information_headlines,
        ]);
    }
    
    private function outputNewsHeadlines() 
    {
        // キャッシュさせて表示を早くする。データベースにアクセスしない。
        $news_headlines = Cache::remember(__METHOD__, $this->minutes, function () {
            return News::orderByDesc('updated_at')->limit(3)->get();
        });

        return $news_headlines;
    }

    private function outputInformationHeadlines() 
    {
        // キャッシュさせて表示を早くする。データベースにアクセスしない。
        $information_headlines = Cache::remember(__METHOD__, $this->minutes, function () {
            return Information::orderByDesc('updated_at')->limit(3)->get();
        });

        return $information_headlines;
    }
}
