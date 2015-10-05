<?php
namespace App\Http\Controllers;

use App\Models\Articles;
use App\User;

class HomeController extends Controller{
    
    public function index()
    {
        $articles = new Articles;
        $user = new User;
        $data['recentArticles'] = $articles->recentArticles(5);
        $data['lastArticles'] = $articles->recentArticles(2);
        $data['newMembers'] = $user->newMembers();
        
        return view('pages.index',$data);
    }
    
    public function login(){
        return view('pages.login');
    }
    
    public function register(){
        return view('pages.register');
    }
}
