<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('sponsor')->nullable();
            $table->string('parent')->nullable();
            $table->string('btcaddress')->nullable();
            $table->string('cellphone')->nullable();
            $table->integer('realsponsorid')->nullable();
            $table->integer('sponsorid')->nullable();
            $table->integer('parentid')->nullable();
            $table->integer('lft')->nullable();
            $table->integer('rgt')->nullable();
            $table->string('ancestors')->nullable();
            $table->string('passwordstring')->nullable();
            $table->string('btc')->nullable();
            $table->string('msg')->nullable();
            $table->integer('limitchildren')->default(3);
            $table->integer('timeoff')->nullable();
            $table->boolean('deleted')->default(0);
            $table->integer('luckynumber')->default(0);
            $table->integer('integer')->nullable();
            $table->boolean('representante')->default(0);
            $table->string('confirmation_code');
            $table->boolean('confirmed')->default(config('access.users.confirm_email') ? false : true);
            $table->rememberToken();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at');
            $table->softDeletes();
        });

        Schema::create('profiles', function($table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('avatar_original');
            $table->string('gender',6);
            $table->biginteger('uid')->unsigned();
            $table->string('access_token');
            $table->string('access_token_secret');
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
        Schema::drop('users');
    }
}
