<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // duguilan

    public function up()
    {
        Schema::create('contents', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('duguilantag_id')->unsigned();
            $table->string('icon');
            $table->string('title');
            $table->string('photo');
            $table->text('body');
            $table->integer('position');
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
        Schema::drop('contents');
    }
}
