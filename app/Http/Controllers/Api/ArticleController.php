<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use App\Http\Resources\Article as ArticleResource;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    function index()
    {
        return ArticleResource::collection(Article::paginate(10));
    }
}
