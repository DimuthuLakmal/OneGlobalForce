<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Comment extends Eloquent{
    
    public $timestamps = false;
    protected $fillable = array('name','club','comment','topic','country','likes');
    
    public function replys(){
        return $this->hasMany('App\Models\Reply','comment_id','id');
    }
    
    public function dumpInfo(){
        return $this->name;
    }
    

}
?>
