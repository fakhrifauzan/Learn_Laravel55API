<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\ArticlesResource;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ArticlesResource
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return ArticleResource
     */
    public function show(Article $article)
    {
        return new ArticleResource($article);
    }
}
