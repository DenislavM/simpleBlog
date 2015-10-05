<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model{
    public $timestamps = false;
   
    //If we don't have a column with the logged user_id, it will be created.
    public function check_user_id($id){
        $profiles = Profile::where('user_id',$id)
                            ->get(); 
        
        $profiles_returned = count($profiles);
  
        if($profiles_returned < 1){
            $profile = new Profile;
            $profile->user_id = $id;
            $profile->save();
        }
        
    }
    
    public function getProfiles($id){
        $profiles = Profile::where('user_id',$id)
                            ->join('users','profiles.user_id', '=','users.id')
                            ->select(array(
                                        'users.id','users.username','profiles.first_name',
                                        'profiles.last_name','profiles.user_id','profiles.city',
                                        'profiles.gender','profiles.age','profiles.profession'
                                    ))
                            ->get();
        
        return $profiles;
    }
    
    public function postProfiles($data,$id){    //Editing a profile
        Profile::where('user_id', '=', $id)
                ->update([
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'city' => $data['city'],
                    'gender' => $data['gender'],
                    'age' => $data['age'],
                    'profession' => $data['profession']
                    ]);
    }
}

