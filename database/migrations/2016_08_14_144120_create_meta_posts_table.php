<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetaPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('value');
            $table->unsignedInteger('post_id')->nullable();
            $table->foreign('post_id')->references('id')->on('posts');
            $table->string('options');
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
        Schema::drop('meta_posts');
    }
}
