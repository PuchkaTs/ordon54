<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deedmenusub extends Model
{
    protected $table = 'deedmenusub';

    protected $fillable = ['title', 'position'];

    public function deedmenu(){

    	return $this->belongsTo('App\Deedmenu', 'deedmenu_id');
    	
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
}
