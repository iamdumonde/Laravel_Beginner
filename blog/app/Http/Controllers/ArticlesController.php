<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        $articles = Article::with('user')->orderBy('created_at', 'desc')->get();
        return view('articles.articles', ['articles' => $articles]);
        //compact('articles')
    }

    // La méthode 'show' du contrôleur
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    // La méthode 'show' du contrôleur
    // public function show($id){
    //     $article = Article::with('user')->where('id', $id)->firstOrFail();
    //     //dd($article);
    //     //ddd($article);
    //     return view('articles.show', compact('article'));
    // }



}