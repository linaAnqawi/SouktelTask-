<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
//
//            $table->integer('lecture_id')->unsigned();
//            $table->integer('user_id')->unsigned();
//            $table->timestamps();
//
//            $table->primary(['lecture_id', 'user_id']);
//
//            $table->foreign('lecture_id')
//                ->references('id')->on('lectures')
//                ->onDelete('cascade');
//
//            $table->foreign('user_id')
//                ->references('id')->on('users')
//                ->onDelete('cascade');
            $table->string('ticket_id',16);
            $table->integer('concert_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('numberOfTickets')->unsigned();
            $table->primary(['ticket_id','concert_id' ,'user_id']);
            $table->foreign('ticket_id')
                ->references('id')
                ->on('tickets')
                ->onDelete('cascade');
            $table->foreign('concert_id')
                ->references('id')
                ->on('concert')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('seller_and_buyer_users')
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
        Schema::dropIfExists('orders');
    }
}
