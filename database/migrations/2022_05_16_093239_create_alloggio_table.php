<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlloggioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alloggio', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('titolo');
            $table->float('prezzo');
            $table->string('descrizione',2500);
            $table->string('tipologia')->nullable();
            $table->tinyInteger('n_camere');
            $table->tinyInteger('n_posti_letto_totali');
            $table->dateTimeTz('data_inserimento');
            $table->date('data_min')->nullable();
            $table->date('data_max')->nullable();
            $table->string('indirizzo');
            $table->char('cap',5);
            $table->string('città');
            $table->char('provincia',2);
            $table->char('genere')->nullable();
            $table->integer('età_min')->nullable();
            $table->integer('età_max')->nullable();
            $table->boolean('opzionato')->default(0);
            $table->integer('superficie')->nullable();
            $table->integer('dimensione_camera')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alloggio');
    }
}