<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duguilantag extends Model
{
    protected $table = 'duguilantags';

    protected $fillable = ['title', 'position'];

    public function contents(){

    	return $this->hasMany('App\Content');

    }
}
