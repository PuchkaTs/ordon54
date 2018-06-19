<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mainbanner extends Model
{
	protected $table = 'mainbanners';

    protected $fillable = [
        'title', 'description', 'photo', 'position'
    ];

    public function getBanners(){

    	$banners = self::orderBy('position', 'asc')->get();

    	return $banners;
    }
}
