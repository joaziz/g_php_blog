<?php


namespace App\Http\Controllers;


use App\Models\Article;

class ArticlesList extends Controller
{
    function get()
    {
        $articles = Article::take(10)->get();


        return view("text", ["articles" => $articles]);
    }

}
