<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $table= 'article';




    public function comment(){
        return $this->hasMany('App\Comment') ;


}
    public function users(){
        return $this->belongsTo('App\User') ; }
}