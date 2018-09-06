<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faqs';

    protected $fillable = ['question', 'answer', 'position'];

    public function getLatestFaqs(){

        $list = Self::orderBy('position')->get();

        return $list;

	}
}
