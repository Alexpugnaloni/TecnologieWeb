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
            $table->bigIncrements('id')->unsigned();
            $table->string('nome');
            $table->string('cognome');
            $table->integer('età');
            $table->char('genere');
            $table->string('email')->unique();
            $table->string('cellulare')->unique();
            $table->string('username',20)->unique();
            $table->string('password');
            $table->string('livello',10)->default('utente');
            $table->rememberToken(); // "ricordami"
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
