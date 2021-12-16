<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title', 255);
            $table->string('slug', 300);
            $table->string('deal', 50);
            $table->string('description', 8000);
            $table->string('country', 50);
            $table->string('city', 255);
            $table->string('address', 255)->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->integer('bedrooms_number');
            $table->integer('bathrooms_number');
            $table->integer('surface');
            $table->integer('price');
            $table->boolean('garage')->default(0);
            $table->boolean('security')->default(0);
            $table->boolean('parking')->default(0);
            $table->boolean('balcony')->default(0);
            $table->boolean('swimming_pool')->default(0);
            $table->boolean('garden')->default(0);
            $table->boolean('terrace')->default(0);
            $table->string('category', 50);
            $table->string('condition', 50);
            $table->string('avatar', 60)->nullable();
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
