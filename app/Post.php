<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Post extends Model
{
    //Table_Name
    protected $table = "posts";
    //Primary_Key
    public $primaryKey ="id";
    //TimeStamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
