<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('status_id')->unsigned();
            $table->integer('team_id')->unsigned();
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')
                    ->references('id')
                    ->on('companies')
                    ->onDelete('cascade');
            $table->foreign('status_id')
                    ->references('id')
                    ->on('statuses')
                    ->onDelete('cascade');

            $table->foreign('team_id')
                    ->references('id')
                    ->on('teams')
                    ->onDelete('cascade');

            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();

            $table->integer('timeline_id')->unsigned();

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
        Schema::dropIfExists('projects');
    }
}
