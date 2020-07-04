<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelroutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelroutes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('placefrom_id');
            $table->unsignedBigInteger('placeto_id');
            $table->softDeletes();
            $table->timestamps();

             $table->foreign('placefrom_id')
            ->references('id')->on('locations')
            ->onDelete('cascade');

             $table->foreign('placeto_id')
            ->references('id')->on('locations')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travelroutes');
    }
}
