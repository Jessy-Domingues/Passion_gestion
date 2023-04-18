<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use App\Http\Requests\StoreArticlesRequest;
use App\Http\Requests\UpdateArticlesRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Articles::with('categories','user')->latest()->get();
        return view('blog.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('blog.creation', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticlesRequest $request)
    {
        $imageName = $request->image->store('articles');
        Articles::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'image' => $imageName
        ]);

        return redirect()->route('dashboard')->with('success', 'Votre article a été créer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Articles $article)
    {
        return view('blog.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articles $article)
    {
        return view('blog.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticlesRequest $request, Articles $articles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articles $articles)
    {
        //
    }
}
