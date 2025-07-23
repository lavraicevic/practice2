<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::with(['category', 'user'])->get();

        return view('pages.articles', ['articles' => $articles]);

    }
}
