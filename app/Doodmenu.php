<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doodmenu extends Model
{
    protected $table = 'doodmenu';

    protected $fillable = ['title', 'position'];

    public function doodmenusub(){

    	return $this->hasMany('App\Doodmenusub');

    }

    public function contents(){

    	return $this->hasMany('App\Content');
    }

    public function getMenus(){
    	$menus = self::orderBy('position', 'asc')->with(['doodmenusub' => function ($query){
    		$query->orderBy('position', 'asc');
    	}])->get();

    	return $menus;
    }
}
