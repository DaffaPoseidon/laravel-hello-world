<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($page)
    {
        echo ("Halaman artikel dengan id ").$page;
    }
}