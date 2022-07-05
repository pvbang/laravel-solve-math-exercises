<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // bài học
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id_lesson');
            $table->string('id_chapter')->nullable();
            $table->string('name_lesson')->nullable();
            $table->longText('content')->nullable();
            $table->string('page')->nullable();
            $table->string('slug')->nullable();
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
        //
    }
};
