<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();

            $table->string('name', 20);
            $table->tinyInteger('album_id');
            $table->boolean('single') -> nullable();
            $table->date('date_of_release') -> nullable();
            $table->string('featuring', 50) -> nullable();
            $table->integer('number_of_listeners') -> unsigned() -> default(0);

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
        Schema::dropIfExists('songs');
    }
}
