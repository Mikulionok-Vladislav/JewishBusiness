<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
$articles = Article::all();
        return view('blog.blog',[
            'articles' => $articles
        ]);
    }

    public function singlePost(){
        $article = Article::all();
        return view('blog.single-post',[
            'articles' => $article
        ]);
    }


}
