<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;

class ArticleShowController extends Controller
{
    public function show(Article $article){
    $article->load(['user', 'category', 'tags']);

    return view('pages.article-single', compact('article'));
    }
}
