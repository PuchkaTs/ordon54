<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doodmenusub extends Model
{
    protected $table = 'doodmenusub';

    protected $fillable = ['title', 'position'];

    public function doodmenu(){

    	return $this->belongsTo('App\Doodmenu', 'doodmenu_id');
    	
    }

    public function contents(){

    	return $this->hasMany('App\Content');
    }

}
