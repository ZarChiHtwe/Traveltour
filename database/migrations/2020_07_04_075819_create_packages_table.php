<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo');
            $table->integer('duration');
            $table->date('depaturedate');
            $table->time('depaturetime');
            $table->integer('packageprice');
            $table->string('description');
            $table->integer('totalprice');
            $table->unsignedBigInteger('car_id');
            $table->unsignedBigInteger('hotel_id');
            $table->unsignedBigInteger('route_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('car_id')
            ->references('id')->on('cars')
            ->onDelete('cascade');

            $table->foreign('hotel_id')
            ->references('id')->on('hotels')
            ->onDelete('cascade');

            $table->foreign('route_id')
            ->references('id')->on('travelroutes')
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
        Schema::dropIfExists('packages');
    }
}
