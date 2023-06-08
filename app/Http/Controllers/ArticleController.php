<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(){
        $this->middleware('auth')->except('index');
    }
    public function index()
    {
        $articles = Article::latest()->paginate();
        return view('article.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.createArticle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $formField = $request->validated();
        $formField['user_id']= Auth::id();
        Article::create($formField);
        return to_route('articles.index')->with('success', 'Votre article a ete ajouter avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.article', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.updateArticle', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $formField = $request->validated();
        $article->fill($formField)->save();
        return to_route('articles.edit', $article->id)->with('success', "L'article a etes bien modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return to_route('articles.index')->with('success', "L'article a etes bien supprimer");
    }
}
