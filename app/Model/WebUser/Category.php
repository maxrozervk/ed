<?php

namespace App\Model\WebUser;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
	public $table = "categories";

    protected $primaryKey='category_id';
    protected $fillable=['category_title','category_slug'];

    protected function posts()
    {
    	return $this->belongsToMany('App\Model\WebUser\Post','post_categories','category_id','post_id');
    }
}
