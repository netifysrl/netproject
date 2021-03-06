<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMilestonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('milestones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamp('date');
            $table->integer('status_id')->unsigned();
            $table->integer('timeline_id')->unsigned();
            $table->foreign('status_id')
                    ->references('id')
                    ->on('statuses')
                    ->onDelete('cascade');
            $table->foreign('timeline_id')
                    ->references('id')
                    ->on('timelines')
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
        Schema::dropIfExists('milestones');
    }
}
