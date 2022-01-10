<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models', function (Blueprint $table) {
            $table->id('model_id');
            $table->string('name');
            $table->binary('videos');
            $table->binary('photos');

            $table->integer('version_id')->unsigned();

            

            $table->timestamps();
        });

        Schema::table('models', function (Blueprint $table){
            $table->foreign('version_id')
                ->references('version_id')->on('versions')
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
        Schema::dropIfExists('models');
    }
}
