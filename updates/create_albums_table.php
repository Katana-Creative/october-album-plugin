<?php namespace LzoDevelopment\Album\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAlbumsTable extends Migration
{
    public function up()
    {
        Schema::create('lzodevelopment_albums', function(Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->integer('album_category');

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('lzodevelopment_albums');
    }
}
