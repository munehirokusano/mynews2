<?php

namespace App\Http\Controllers\Release;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }
//     /**
//     public function index(Request $request)
//     {
//         $posts = News::all()->sortByDesc('updated_at');

//         $i = 0;
//         $headlines = [];
        
//         foreach ($posts as $post) {
//             if ($i > 3) {
//                 break;
//             }
//             $headlines[] = $posts->shift();
//             $i++;
//         }
//         $postPictureTitles = PictureTitle::all()->sortByDesc('updated_at');

//         if (count($postPictureTitles) > 0) {
//             $PictureTitleHeadline = $postPictureTitles->shift();
//         } else {
//             $PictureTitleHeadline = null;
//         }
        
//         if (count($postPictureTitles) > 0) {
//         // 写真タイトルの数、最初の一個目
//             $postPictureTitleFirstCounts = 1;
//         } else {
//             $postPictureTitleFirstCounts = null;
//         }
        
//         // 写真タイトルの数、その他
//         if (count($postPictureTitles) > 1) {
//             $postPictureTitleCounts = count($postPictureTitles);
//         } else {
//             $postPictureTitleCounts = null;
//         }

//         return view('Release.news.index', [
//             'headlines' => $headlines,
//             'posts' => $posts,
//             'PictureTitleHeadline' => $PictureTitleHeadline,
//             'postPictureTitles' => $postPictureTitles,
//             'postPictureTitleFirstCounts' => $postPictureTitleFirstCounts,
//             'postPictureTitleCounts' => $postPictureTitleCounts
//         ]);
//     }
//     */
//     // /**
//     //  *@param integer $headline_id
//     //  */
//     public function blogPage($headline_id)
//     {
//         $blogPage = News::find($headline_id);
        
//         return view('news.blogPage', [
//             'blogPage' => $blogPage,
//         ]);
//     }
//     public function contact()
//     {
//         return view('news.contact');
//     }
}
