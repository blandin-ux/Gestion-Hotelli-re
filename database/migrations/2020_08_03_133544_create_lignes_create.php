<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLignesCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lignes', function (Blueprint $table) {
            $table->id();
            $table->integer('article_id')->default(0);
            $table->integer('facture_id')->default(0);
            $table->integer('mois')->default(0);
            $table->integer('annee')->default(0);
            $table->integer('semaine')->default(0);
            $table->integer('ticket_id')->default(0);
            $table->integer('quantite')->default(0);
            $table->double('pu')->default(0);
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
        Schema::dropIfExists('lignes');
    }
}
