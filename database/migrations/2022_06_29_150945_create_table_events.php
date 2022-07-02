<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Заголовок');
            $table->text('preview_content')->comment('Контент для превью');
            $table->text('content')->comment('Контент');
            $table->string('slug')->comment('Служебный идентификатор');
            $table->index('slug');
            $table->boolean('hide')->default(false)->comment('Не отображать на сайте');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->comment('События');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
