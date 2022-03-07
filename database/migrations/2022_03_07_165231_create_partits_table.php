<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partits', function (Blueprint $table) {
            $table->id();

            
            $table->timestamp('data');
            $table->unsignedBigInteger('equipLocal_id')->nullable();
            $table->unsignedBigInteger('equipVisitant_id')->nullable();
            $table->integer('golsLocal');
            $table->integer('golsVisitant');

            $table->foreign('equipLocal_id')->references('id')->on('equips')->onDelete('set null');
            $table->foreign('equipVisitant_id')->references('id')->on('equips')->onDelete('set null');

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
        Schema::dropIfExists('partits');
    }
}
