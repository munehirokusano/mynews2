<?php

namespace App\Http\Controllers\Release;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Cache;
use App\News;

class TopPageController extends Controller
{
    public function index(Request $request)
    {
        $minutes = 10;

        $posts = Cache::remember(__METHOD__, $minutes, function () {
            return News::all()->sortByDesc('updated_at');
        });

        $i = 0;
        $news_headlines = [];
        
        foreach ($posts as $post) {
            if ($i > 3) {
                break;
            }
            $news_headlines[] = $posts->shift();
            $i++;
        }

        return view('release.topPage.index', [
            'news_headlines' => $news_headlines,
        ]);
    }
}
