<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

use App\PictureTitle;

class NewsController extends Controller
{
    public function index(Request $request) {
        $posts = News::all()->sortByDesc('updated_at');
        
        $i = 0;
        $headlines = [];
        
        foreach($posts as $post) {
            if($i >3){
                break;
            }  
            $headlines[] = $posts->shift();
            $i++;
        }
       
        
        
        
        // if (count($posts) > 0 ) {
        //     // $headline = $posts->shift();
            
        //     $headlines[] = $posts->shift();
        // } else {
        //     $headlines = null;
        // }
        
        // if (count($posts) > 1) {
        //     // $postSecond =  $posts->shift();
        //     $headlines[] = $posts->shift();
        // } else {
        //     $headlines = null;
        // }
        
        // if (count($posts) > 2) {
        //     // $postSecond =  $posts->shift();
        //     $headlines[] = $posts->shift();
        // } else {
        //     $headlines = null;
        // }
        
        
        // if (count($posts) > 2) {
        //     // $postThird = News::find(3);
        //     $headlines[] = $posts->shift();
        // } else {
        //     $postThird = null;
        // }
        
        
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
        // dd($headlines);
    
        return view('news.index', [
            // 'headline' => $headline, 
            'headlines' => $headlines,
            'posts' => $posts, 
            // 'postsecond' => $postSecond,
            // 'postThird' => $postThird,
            'PictureTitleHeadline' => $PictureTitleHeadline, 
            'postPictureTitles' => $postPictureTitles,
            'postPictureTitleFirstCounts' => $postPictureTitleFirstCounts,
            'postPictureTitleCounts' => $postPictureTitleCounts
        ]);
    }
}
