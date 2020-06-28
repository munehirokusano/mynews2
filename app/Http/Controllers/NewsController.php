<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

use App\PictureTitle;

class NewsController extends Controller
{
    public function index(Request $request) {
        $posts = News::all()->sortByDesc('updated_at');
        
        if (count($posts) > 0) {
            $headline = $posts->shift();    
        } else {
            $headline = null;
        }
        
        $postPictureTitles = PictureTitle::all()->sortByDesc('updated_at');
        
        if (count($postPictureTitles) > 0) {
            $PictureTitleHeadline = $postPictureTitles->shift();    
        } else {
            $PictureTitleHeadline = null;
        }
        
        if (count($postPictureTitles) > 0 ) {
        // 写真タイトルの数、最初の一個目
        $postPictureTitleFirstCounts = 1;
        } else {
            $postPictureTitleFirstCounts = null;
        }
        
        // 写真タイトルの数、その他
        if (count($postPictureTitles) > 1 ) {
            $postPictureTitleCounts = count($postPictureTitles);
        } else {
            $postPictureTitleCounts = null;
        }
        
    
        return view('news.index', [
            'headline' => $headline, 
            'posts' => $posts, 
            'PictureTitleHeadline' => $PictureTitleHeadline, 
            'postPictureTitles' => $postPictureTitles,
            'postPictureTitleFirstCounts' => $postPictureTitleFirstCounts,
            'postPictureTitleCounts' => $postPictureTitleCounts
        ]);
    }
}
