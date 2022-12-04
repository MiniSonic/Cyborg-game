<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrain()->onDelete('cascade');
            $table->string('title');
            $table->string('category');
            $table->text('thumbnail')->nullable();
            $table->text('video')->nullable();
            $table->text('post_image')->nullable();
            $table->text('body');
            $table->decimal('downloads');
            $table->integer('votes');
            $table->integer('capacity');
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
        Schema::dropIfExists('games');
    }
}
