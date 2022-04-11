<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\CountryRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();

        return view('admin.articles.index', [
            'articles' => $articles
        ]);
    }

    public function create(){
        return view('admin.articles.create');
    }

    public function store(Request $request){
//        $request->validate([
//            'name' => 'required|min:10|max:200',
//            'content' => 'min:10|max:10000'
//                           ]);

//        $this->validate($request,
//            [
//            'name' => 'required|min:10|max:200',
//            'content' => 'min:10|max:10000'
//                           ]
//
//        );

//        $errors = Validator::make($request->all(),
//                    [
//            'name' => 'required|min:10|max:200',
//            'content' => 'min:10|max:10000'
//                           ]
//
//        );
//        dd($errors->getMessageBag()->all());


        Article::query()->create($request->all());
        // create article
    }

    public function edit(Request $request, Article $article){

        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, $id){
        $article  = Article::query()->findOrFail($id);
        $article->fill($request->all());
        $article->save();
    }

    public function delete($id = 1){
       dd( Article::select(['id', 'name'])
               ->where('id', 5  )
               ->get());
        $article = Article::query()->find($id);
        $article->delete();

    }
}
