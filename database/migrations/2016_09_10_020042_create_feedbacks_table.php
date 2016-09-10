<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('feedbacks', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('user_id')->nullable();          
            $table->string('sender')->nullable();          
            $table->string('recipient')->nullable();
            $table->string('subject')->nullable();
            $table->text('body_plain')->nullable();         
            $table->text('stripped_text')->nullable();
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
        //
        Schema::drop('feedbacks');
    }
}
