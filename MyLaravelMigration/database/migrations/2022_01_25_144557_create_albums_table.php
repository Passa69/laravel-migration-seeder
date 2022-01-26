<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();

            $table->string('name_album', 20);
            $table->tinyInteger('artist_id');
            $table->text('description') -> nullable();
            $table->date('date_of_release');
            $table->integer('number_of_listeners') -> unsigned() -> default(0);
            $table->integer('number_of_copies_sold') -> unsigned() -> default(0);
            

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
        Schema::dropIfExists('albums');
    }
}
