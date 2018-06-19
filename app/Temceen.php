<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temceen extends Model
{
    protected $table = 'temceen';

    protected $fillable = ['body', 'title', 'photo', 'deadline'];

    public function deedMenu(){

    	return $this->belongsTo('App\Deedmenu');
    }

    public function deedMenySub(){

    	return $this->belongsTo('App\Deedmenusub');
    }

    public function shorten($num = 100){

        $string = strip_tags($this->body);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;

    }  
}
