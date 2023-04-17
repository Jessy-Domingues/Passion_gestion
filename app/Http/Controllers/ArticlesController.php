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
        $articles = Articles::with('categories','user')->get();
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Articles $articles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articles $articles)
    {
        //
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
