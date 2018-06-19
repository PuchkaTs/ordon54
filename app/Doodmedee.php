<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doodmedee extends Model
{
    protected $table = 'doodmedee';

    protected $fillable = ['body', 'title', 'photo'];

    public function doodmenu(){

    	return $this->belongsTo('App\Doodmenu');
    }

    public function doodmenusub(){

    	return $this->belongsTo('App\Doodmenusub');
    }

    public function shorten($num = 100){

        $string = strip_tags($this->body);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;

    }  

    public function members()
    {
        return $this->belongsToMany('App\Member');
    }
}


