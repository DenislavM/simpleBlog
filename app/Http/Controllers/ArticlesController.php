<?php
namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ArticlesController extends Controller{
    
    public function userArticles(){
        $articles = new Articles;
        $data['articles'] = $articles->getUserArticles(Auth::user()->id);
        
        return view('pages.userArticles',$data);
    }
    
    public function viewArticle($id){
        $articles = new Articles;
        $data = $articles->getArticle($id);
        
        return view('pages.viewArticle',$data[0]);
    }
    
    
    public function postArticle($id = null){ //Post or Edit Article
        $data = Input::all();
        $validator = Validator::make($data, [
            'topic' => 'required',
            'categorie' => 'required',
            'text' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('new/article')
                        ->withErrors($validator)
                        ->withInput();
        }
        $article = new Articles;
        $article->postArticle($data,Auth::user()->id,$id);
        
        return Redirect::to('/');
    }
    
    public function newArticle(){
        return view('pages.postArticle'); 
    }
    
    public function getEditArticle($id){
        $articles = new Articles;
        $data = $articles->getArticle($id);
        if ($data[0]['user_id'] == Auth::user()->id) {
            return view('pages.editArticle', $data[0]);
        }else{
            abort(404);
        }
    }
    
    public function deleteArticle($id){
        $articles = new Articles;
        $articles->deleteArticle($id);
        $data['articles'] = $articles->getUserArticles(Auth::user()->id);
        
        return view('pages.userArticles',$data);
    }
}
