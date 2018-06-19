<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemceenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temceen', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('deedmenu_id')->unsigned();
            $table->integer('deedmenusub_id')->unsigned();
            $table->string('title');
            $table->string('photo');
            $table->date('deadline');
            $table->text('body');
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
        Schema::drop('temceen');
    }
}
