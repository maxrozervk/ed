<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('page_id');
            $table->string('page_title')->nullable();
            $table->string('page_subtitle')->nullable();
            $table->string('page_slug')->nullable();
            $table->string('page_image')->nullable();
            $table->text('page_data')->nullable();
            $table->boolean('page_publish_status')->default(0);
            $table->string('page_meta_description')->nullable();
            $table->string('page_meta_image')->default('/img/blog/blog-default.jpg');
            $table->string('page_meta_cannonical')->nullable();
            $table->boolean('page_meta_robotsFollow')->default(0);
            $table->boolean('page_meta_robotsIndex')->default(0);
            $table->string('page_user_id')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
