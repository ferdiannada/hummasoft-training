<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title      = "Article List";
        $titleForm  = "List Article";
        $article    = Article::all();

        return view('admin.articles', ["title" => $title, "titleForm" => $titleForm], compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Articles";
        $titleForm = "Add New";
        return view('admin.create-articles', ["title" => $title, "titleForm" => $titleForm]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "judul"     =>  "required",
            "author"    =>  "required",
            "content"   =>  "required"
        ]);

        Article::create([
            "title"     => $request->judul,
            "content"   => $request->content,
            "author"    => $request->author
        ]);

        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $title = "Detail Article";
        $titleForm = "Detail";
        $post = Article::find($article)->first();
        // dd($post);
        return view('admin.detail', ["title" => $title, "titleForm" => $titleForm], compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $title = "Edit Article";
        $titleForm = "Edit";
        $post = Article::find($article)->first();
        // dd($post);
        return view('admin.edit-articles', ["title" => $title, "titleForm" => $titleForm], compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            "judul" => "required",
            "content" => "required",
            "author"    => "required"
        ]);

        $post = Article::find($article)->first();
        $post->title = $request->judul;
        $post->content = $request->content;
        $post->author = $request->author;
        $post->update();
        // dd($post);

        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $post = Article::find($article)->first();
        $post->delete();
        return redirect('/articles');
    }
}
