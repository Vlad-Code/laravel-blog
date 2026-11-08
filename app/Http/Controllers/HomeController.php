<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): Factory|View|Application
    {
        /*$user = User::query()->get();

        dd($user);*/

        return view('index');
    }
}
