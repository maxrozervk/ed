<?php

namespace App\Model\AdminUser;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
	public $table = "tags";

    protected $primaryKey='tag_id';
    protected $fillable=['tag_title','tag_slug'];


    protected function posts()
    {
    	return $this->belongsToMany('App\Model\AdminUser\Post', 'post_tags','tag_id','post_id');
    }

}
