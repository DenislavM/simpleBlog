<?php
namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Articles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ProfileController Extends Controller{
    
    public function getProfileInfo(){
        $profile = new Profile;
        $profile->check_user_id(Auth::user()->id);
        $data = $profile->getProfiles(Auth::user()->id);
        
        return view('pages.profile',$data[0]);
    }
    
    public function postProfile(){
        $data = Input::all(); // Getting information from form
        $profile = new Profile;
        $profile->postProfiles($data,Auth::user()->id);
        
        return Redirect::to('/');
    }
    
    public function getProfile($id = null){
        $user_id = isset($id) ? $id : Auth::user()->id;
        
        $articles = new Articles;
        $profile = new Profile;
        
        $data['articles']= $articles->getUserArticles($user_id);
        $data['profile']= $profile->getProfiles($user_id);
        
        return view('pages.viewProfile',$data);
    }
}
