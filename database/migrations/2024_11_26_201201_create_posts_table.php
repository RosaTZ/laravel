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
            $table->string('title', 500);
            $table->string('slug', 500);
            $table->text('description')->bullable();
            $table->text('content')->nullable();
            $table->string('image')->nullable();
            $table->enum('posted', ['yes', 'not'])->default('not');
            $table->timestamps();

            $table->foreignId('categori_id')->constrained()
            ->onDelete('cascade');
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
