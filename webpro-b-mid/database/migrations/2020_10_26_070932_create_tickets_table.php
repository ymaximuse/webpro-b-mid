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
            $table->bigIncrements('ticket_id');
            $table->bigInteger('event_id')->unsigned();
            $table->bigInteger('ticket_owner')->unsigned();
            $table->foreign('event_id')->references('event_id')->on('events')->onDelete('cascade');
            $table->foreign('ticket_owner')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('used');
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
