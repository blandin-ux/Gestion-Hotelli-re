<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linvs', function (Blueprint $table) {
            $table->id();
            $table->integer('article_id')->default(0);
            $table->integer('enstock')->default(0);
            $table->integer('reel')->default(0);
            $table->integer('inventaire_id')->default(0);
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
        Schema::dropIfExists('linvs');
    }
}
