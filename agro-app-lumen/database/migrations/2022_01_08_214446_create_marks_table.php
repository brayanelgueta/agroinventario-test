<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id('mark_id');
            $table->string('name');
            $table->binary('logo');

            $table->integer('model_id')->unsigned();
            
            $table->timestamps();
        });

        Schema::table('marks', function (Blueprint $table){
            $table->foreign('model_id')
                ->references('model_id')->on('models')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
