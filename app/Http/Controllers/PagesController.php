<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // 首页视图展示方法
    public function root()
    {
        return view('pages.root');
    }
}
