<?php

namespace App\Model\AdminUser;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
	public $table = "categories";

    protected $primaryKey='category_id';
    protected $fillable=['category_title','category_slug'];

    protected function posts()
    {
    	return $this->belongsToMany('App\Model\AdminUser\Post','post_categories','category_id','post_id');
    }
}
