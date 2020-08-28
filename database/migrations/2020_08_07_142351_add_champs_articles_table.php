<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChampsArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('name',50);
            $table->integer('quantite')->default(0);
            $table->integer('pa')->default(0);
            $table->integer('pv')->default(0);
            $table->integer('minimum')->default(0);
            $table->integer('categorie_id')->default(0);
            $table->string('image_uri')->default(0);
            $table->boolean('actif')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
}
