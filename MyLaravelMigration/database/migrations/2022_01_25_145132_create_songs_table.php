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

            $table->string('name', 50);
            $table->boolean('single') -> nullable() -> default(false);
            $table->date('date_of_release') -> nullable();
            $table->string('featuring', 50) -> nullable();
            $table->string('genre', 50);
            $table->integer('duration') -> unsigned();
            $table->bigInteger('number_of_listeners') -> unsigned() -> default(0);

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
