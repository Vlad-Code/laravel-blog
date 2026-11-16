<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Carbon\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): Factory|View|Application
    {

        $latestArticles = Article::with('categories')->latest()->take(6)->get();
        return view('index', compact('latestArticles'));
    }
}
