<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trails', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('partenza');
            $table->string('arrivo');
            $table->string('vicino');
            $table->string('distanza');
            $table->string('durata');
            $table->string('percorso');
            $table->string('difficolta');
            $table->boolean('bambini');
            $table->boolean('animali');
            $table->text('descrizione');
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
        Schema::dropIfExists('trails');
    }
}
