<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deedmenu extends Model
{
    protected $table = 'deedmenu';

    protected $fillable = ['title', 'position'];

    public function deedmenusub(){

    	return $this->hasMany('App\Deedmenusub');

    }

    public function contents(){

    	return $this->hasMany('App\Content');
    }

    public function news(){

        return $this->hasMany('App\News');
    }

    public function temceen(){

        return $this->hasMany('App\Temceen');
    }

    public function getMenus(){
    	$menus = self::orderBy('position', 'asc')->with(['deedmenusub' => function ($query){
    		$query->orderBy('position', 'asc');
    	}])->get();
    	return $menus;
    }
}
