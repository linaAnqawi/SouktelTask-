<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
//          $table->bigIncrements('id')->Str::random(16);
            $table->string('id', 16)->unique()->primary();
            $table->string('name');
            $table->integer('price');
            $table->integer('numberOfTickets');
            $table->unsignedBigInteger('concert_id');
            $table->foreign('concert_id')
                ->references('id')
                ->on('concert')
                ->onDelete('cascade');

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
        Schema::dropIfExists('tickets');
    }
}
