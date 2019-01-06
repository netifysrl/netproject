<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('update_tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->integer('ticket_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('ticket_id')
                    ->references('id')
                    ->on('tickets')
                    ->omDelete('cascade');
            $table->foreign('status_id')
                    ->references('id')
                    ->on('statuses')
                    ->omDelete('cascade');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->omDelete('cascade');
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
        Schema::dropIfExists('update_tickets');
    }
}
