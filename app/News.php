<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = ['body', 'title', 'photo'];

    public function deedmenu(){

    	return $this->belongsTo('App\Deedmenu');
    }

    public function deedmenusub(){

    	return $this->belongsTo('App\Deedmenusub');
    }

    public function shorten($num = 100){

        $string = strip_tags($this->body);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;

    }   
}
