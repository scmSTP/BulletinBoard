<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->text('password');
            $table->string('profile', 255);
            $table->string('type', 1)->default(1);
            $table->string('phone', 20)->nullable($value = true);
            $table->string('address', 255)->nullable($value = true);
            $table->date('dob')->nullable($value = true);
            $table->unsignedBigInteger('create_user_id');
            $table->foreign('create_user_id')->references('id')->on('users');
            $table->unsignedBigInteger('updated_user_id');
            $table->foreign('updated_user_id')->references('id')->on('users');
            $table->unsignedBigInteger('deleted_user_id')->nullable($value = true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
