<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{   
    // Duguilan

    protected $table = 'contents';

    protected $fillable = ['body', 'title', 'photo', 'position', 'icon'];

    public function deedmenu(){

        return $this->belongsTo('App\Deedmenu', 'deedmenu_id');
        
    }

    public function members()
    {
        return $this->belongsToMany('App\Member');
    }

    public function deedmenusub(){

        return $this->belongsTo('App\Deedmenusub', 'deedmenusub_id');
        
    }

    public function doodmenu(){

        return $this->belongsTo('App\Doodmenu', 'doodmenu_id');
        
    }

    public function doodmenusub(){

        return $this->belongsTo('App\Doodmenusub', 'doodmenusub_id');
        
    }

    public function duguilantag(){

        return $this->belongsTo('App\Duguilantag', 'duguilantag_id');
        
    }
       
    public function shorten($num = 100){

        $string = strip_tags($this->body);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;

    }   

    public function shortenTitle($num = 100){

        $string = strip_tags($this->title);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;

    }       

    public function allow_new_line(){

	    return strip_tags(nl2br($this->body), '<br><br/>');

	}

    public function getLatestNews(){

        $list = Self::latest()->limit(5)->get();

        return $list;

	}

    public function getLatestId(){
        $id = Self::latest()->first()->id;

        return $id;
    }
}
