<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model{
    
    public function getUserArticles($id){
        $articles = Articles::where('user_id',$id)
                            ->orderBy('created_at','desc')
                            ->paginate(5);
        $articles->setPath('');
        
        return $articles;
    }
    
    public function getArticle($id){
        $articles = Articles::where('articles.id',$id)
                            ->join('users','articles.user_id','=','users.id')
                            ->select(array(
                                    'articles.id','articles.user_id','articles.topic',
                                       'articles.text','articles.created_at',
                                       'users.id AS user_id','users.username',
                                       'articles.categorie'
                                    ))
                            ->get();
       
        return $articles->toArray();
    }
    
    public function postArticle($data,$user_id,$id=null){   //Post or Edit Article
        $article = new Articles;
        if($id != null){
            if($article->user_id == $user_id){
                Articles::where('id',$id)
                        ->update(array(
                            'categorie' => $data['categorie'],
                            'topic' => $data['topic'],
                            'text' => $data['text']
                                      ));
            }
        }else{
            $article->user_id = $user_id;
            $article->categorie = $data['categorie'];
            $article->topic = $data['topic'];
            $article->text = $data['text'];
            $article->save();
        }
    }
    
    public function deleteArticle($id){
        Articles::where('id','=',$id)->delete();
    }
    
    //Modules
    public function recentArticles($limit){
        $recentArticles = Articles::join('users','articles.user_id','=','users.id')
                                   ->select(array(
                                       'articles.id','articles.user_id','articles.topic',
                                       'articles.text','articles.created_at',
                                       'users.id AS user_id','users.username'
                                       ))
                                   ->orderBy('created_at','desc')
                                   ->take($limit)
                                   ->get();
        
        return $recentArticles;  
    }
}
