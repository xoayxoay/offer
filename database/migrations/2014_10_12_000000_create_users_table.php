<?php

use Illuminate\Support\Facades\Schema;
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
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->char('status',10)->nullable()->default('active');
            $table->char('lever',10)->nullable()->default('member');
            $table->char('avatar')->nullable()->default('user');
            $table->integer('phone')->nullable();
            $table->char('facebook')->nullable();
            $table->char('address')->nullable();
            $table->char('bank')->nullable();
            $table->char('subid')->unique();
            $table->rememberToken();
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
