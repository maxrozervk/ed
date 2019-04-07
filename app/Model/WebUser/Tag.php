<?php

namespace App\Model\WebUser;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
	public $table = "tags";

    protected $primaryKey='tag_id';
    protected $fillable=['tag_title','tag_slug'];


    protected function posts()
    {
    	return $this->belongsToMany('App\Model\WebUser\Post', 'post_tags','tag_id','post_id');
    }

}
