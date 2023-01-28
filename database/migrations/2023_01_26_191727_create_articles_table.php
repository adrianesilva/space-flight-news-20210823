<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('featured')->default(0);
            $table->string('title');
            $table->string('url')->nullable();
            $table->string('imageUrl')->nullable();
            $table->string('newsSite')->nullable();
            $table->string('summary',500)->nullable();
            $table->string('publishedAt')->nullable();
            $table->string('launches')->nullable();
            $table->string('events')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
