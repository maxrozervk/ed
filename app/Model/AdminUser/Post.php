<?php

namespace App\Model\AdminUser;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public $table = "posts";

    protected $primaryKey='post_id';

    protected $fillable=[
    	'post_title','post_subtitle','post_slug','post_image','post_data','post_status','post_user_id',
    ];

    // protected function user()
    // {
    // 	$this->belongsTo('App\User');
    // }


    public function categories()
    {
    	return $this->belongsToMany('App\Model\AdminUser\Category','post_categories','post_id','category_id');
    }

	public function tags()
    {
    	return $this->belongsToMany('App\Model\AdminUser\Tag','post_tags','post_id','tag_id');
    }

}
