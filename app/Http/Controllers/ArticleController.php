<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
     public function index()
     {
         $articles = Article::query()->with('categories')->latest()->paginate(6);
         $categories = Category::all();
         return view('articles.index', compact('articles', 'categories'));
     }

    public function show(Article $article)
    {
        $article->load('categories');
        return view('articles.show', compact('article'));
    }
}
