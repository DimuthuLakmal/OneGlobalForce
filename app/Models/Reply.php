<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Reply extends Eloquent{
    
    public $timestamps = false;
    protected $fillable = array('comment_id','name','club','reply','likes');

    public function comment(){
        return $this->belongsTo('App\Models\Comment','comment_id','id');
    }
}


?>

