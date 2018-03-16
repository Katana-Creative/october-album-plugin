<?php namespace LzoDevelopment\Album\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAlbumCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('lzodevelopment_album_categories', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lzodevelopment_album_categories');
    }
}
