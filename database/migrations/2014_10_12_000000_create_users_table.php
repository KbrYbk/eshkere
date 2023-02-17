<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');//имя
            $table->string('surname');//фамилия
            $table->string('patronymic');//отчество
            $table->string('login')->unique();//логин
            $table->string('email')->unique();//почта
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');//пароль
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
        Schema::dropIfExists('users');
    }
};
