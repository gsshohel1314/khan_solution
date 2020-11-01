<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->bigIncrements('post_id');
            $table->string('post_title')->unique();
            $table->text('post_details');
            $table->string('post_photo',50);
            $table->integer('post_creator');
            $table->integer('post_category');
            $table->integer('post_tag');
            $table->string('post_slug',100);
            $table->boolean('post_status')->default(false);
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
        Schema::dropIfExists('blog_posts');
    }
}
