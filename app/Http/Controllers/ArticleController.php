<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request){
        $articles = Article::all();
        return view('articles.index',['articles' => $clients]);
    }
    public function store(Request $request)
    {
        $article = new Article();
        $article->libele = $request->input('libele');
        $article->prix = $request->input('prix');
        $article->save();
        return redirect()->route('articles.index');
    }
public function create(){
    return view('clients.create');

}
public function update(Request $request, $id)
    {
    $article = Article::find($id);
    $article->libele = $request->input('libele');
    $article->prix = $request->input('prix');
    $article->save();
    return redirect()->route('articles.index');

    }
    public function destroy( $id){
        $article = Article::find($id);
        return redirect()->route('articles.index');

    }
}
