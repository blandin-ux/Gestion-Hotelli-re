<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChampsStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stocks', function (Blueprint $table) {
            $table->string('name',50);
            $table->string('numserie',20);
            $table->string('annees',10);
            $table->string('mois',10);
            $table->string('semaines',10);
            $table->integer('article_id')->default(0);
            $table->boolean('actif')->default(1);
            $table->boolean('confirmer')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stocks', function (Blueprint $table) {
            //
        });
    }
}
