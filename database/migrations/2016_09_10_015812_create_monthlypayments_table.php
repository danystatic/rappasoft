<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthlypaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('monthlypayments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->decimal('payment',16,8);
            $table->integer('playnumber')->nullable();
            $table->integer('paid')->default(0);
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
        Schema::drop('monthlypayments');
    }
}
