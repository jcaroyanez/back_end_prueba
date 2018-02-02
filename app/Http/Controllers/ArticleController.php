<?php



namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return Article::all();
    }

    public function show($id){
        return Article::find($id);
    }

    public function store(Request $request){
        $article = Article::create($request->all());
        return response()->json($article,201);
    }

    public function update(Request $request,Article $article){
        $article->update($request->all());
        return response()->json($article,200);
    }

    public function delelte(Article $article){
        $article->delete();
        return response()->json(null,204);
      }

    public function examples($arg){
        $article = User::whereNull('remember_token')->sum('id');
        return response()->json(['total' => $article]);
    }  
}
