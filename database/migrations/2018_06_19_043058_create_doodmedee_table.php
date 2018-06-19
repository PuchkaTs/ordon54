<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoodmedeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doodmedee', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('doodmenu_id')->unsigned();
            $table->integer('doodmenusub_id')->unsigned();
            $table->string('title');
            $table->string('photo');
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
        Schema::drop('doodmedee');
    }
}
