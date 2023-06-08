<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentaireRequest;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commentaires = Commentaire::latest()->paginate();
        return view('commentaire.commentaires', compact('commentaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('commentaire.createCommentaire');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentaireRequest $request)
    {
        $formField = $request->validated();
        $formField['article_id']= Auth::id();
        Commentaire::create($formField);
        return to_route('commentaires.index')->with('success', 'Votre commentaire a ete ajouter avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Commentaire $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commentaire $commentaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commentaire $commentaire)
    {
        $commentaire->delete();
        return to_route('commentaires.index')->with('success', "Le commentaire a etes bien supprimer");
    }
}
