<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
//        return 'Article控制器的index方法';
        return view('article.list');
    }
}
