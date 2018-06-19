<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $table = 'members';

    protected $fillable = [
        'firstName', 'lastName', 'photo', 'body', 'position'
    ];

    public function contents()
    {
        return $this->belongsToMany('App\Content');
    }

    public function doodmedee()
    {
        return $this->belongsToMany('App\Doodmedee');
    }

}
