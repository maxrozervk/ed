<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('post_id');
            $table->string('post_title')->nullable();
            $table->string('post_subtitle')->nullable();
            $table->string('post_slug')->nullable();
            $table->string('post_image')->nullable();
            $table->text('post_data')->nullable();
            $table->boolean('post_publish_status')->default(0);
            $table->string('post_meta_description')->nullable();
            $table->string('post_meta_image')->default('/img/blog/blog-default.jpg');
            $table->string('post_meta_cannonical')->nullable();
            $table->boolean('post_meta_robotsFollow')->default(0);
            $table->boolean('post_meta_robotsIndex')->default(0);
            $table->string('post_user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
