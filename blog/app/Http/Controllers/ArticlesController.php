<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        $articles = Article::with('user')->orderBy('created_at', 'desc')->get();
        return view('articles.articles', compact('articles'));
        // ['articles' => $articles]
    }


    //Création d'une sous requête avec 'eloquent', la méthode 'with()' accepte un tableau avec un callback:
    public function show($id)
    {
        $article = Article::with('user')->with(['comments' => function ($query) {
            $query->with('user');
        }])->findOrFail($id);
    
        // $article = Article::with(['comments' => function ($query) {
        //     $query->with('user');
        // }])->findOrFail($id);

        return view('articles.show', compact('article'));
    }


    //Create method
    public function create()
    {
        return view('articles.create');
    }

    //Store method
    public function store(Request $request)
    {
        // vérification des permissions plus tard
        $user = User::find(1);
        $request['user_id'] = $user->id;
    
        $this->validate($request, [
            'title' => 'required|string',
            'body' => 'required|string',
            'user_id' => 'required|numeric|exists:users,id',
        ]);
        // dd($request->all());
        
        //Enregistre l'article
        $art = Article::create($request->all());
        // dd($art);

        //Redirection après la création d'un article
        Article::create($request->all());
        return redirect('/articles')->with(['succes_message' => 'L\'article a été créé !']);
    }

    //Edit method
    public function edit(Article $article){
        return view('articles.edit', compact('article'));
    }

    //Update method
    public function update(Request $request, Article $article){
        // dd($article, $request->all());
        $user = User::find(1);
        $request['user_id'] = $user->id;
        $article->update($request->all());
    }

    //Delete method to delete article
    public function delete(Article $article){
        //vérification des permissions plus tard
        $article->delete();
    }


}