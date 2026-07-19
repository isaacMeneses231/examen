<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleFactoryRequest;
use App\Models\ArticleFactory;
use App\Models\Article;
use App\Models\Factory;

class ArticleFactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article_factories = ArticleFactory::with(['article'])->orderByDesc('id')->get();
        return view('article_factories.index', compact('article_factories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $article_factory = new ArticleFactory();
        $articles = Article::all();
        $factories = Factory::all();
        
        return view('article_factories.create', compact('article_factory', 'articles', 'factories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleFactoryRequest $request)
    {
        ArticleFactory::create($request->validated());
        return redirect()->route('article_factories.index')->with('success', 'Registro creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article_factory = ArticleFactory::with(['article'])->findOrFail($id);
        return view('article_factories.show', compact('article_factory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article_factory = ArticleFactory::with(['article'])->findOrFail($id);
        $articles = Article::all();
        $factories = Factory::all();
        
        return view('article_factories.edit', compact('article_factory', 'articles', 'factories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleFactoryRequest $request, string $id)
    {
        $article_factory = ArticleFactory::with(['article'])->findOrFail($id);
        $article_factory->update($request->validated());
        return redirect()->route('article_factories.index')->with('success', 'Registro actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article_factory = ArticleFactory::with(['article'])->findOrFail($id);
        $article_factory->delete();
        return redirect()->route('article_factories.index')->with('success', 'Registro eliminado correctamente');
    }
}