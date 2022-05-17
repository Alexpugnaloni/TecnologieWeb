<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*
            $table->bigIncrements('id')->unsigned()->index();;
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username',20)->unique();
            $table->string('password');
            $table->string('role',10);
            $table->rememberToken();
            $table->timestamps();
*/
        Schema::create('utente', function (Blueprint $table) {
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
        Schema::dropIfExists('utente');
    }
}
