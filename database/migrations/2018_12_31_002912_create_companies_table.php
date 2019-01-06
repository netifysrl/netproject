<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('business_name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('street')->nullable();
            $table->integer('number')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country')->nullable();
            $table->integer('comm_contact_id')->unsigned();
            $table->integer('tech_contact_id')->unsigned();
            $table->integer('exec_contact_id')->unsigned();
            $table->integer('amm_contact_id')->unsigned();
            $table->integer('ref_user_id')->unsigned();
            $table->foreign('comm_contact_id')
                    ->references('id')
                    ->on('contacts')
                    ->onDelete('cascade');
            $table->foreign('tech_contact_id')
                    ->references('id')
                    ->on('contacts')
                    ->onDelete('cascade');
            $table->foreign('exec_contact_id')
                    ->references('id')
                    ->on('contacts')
                    ->onDelete('cascade');
            $table->foreign('amm_contact_id')
                    ->references('id')
                    ->on('contacts')
                    ->onDelete('cascade');
            $table->foreign('ref_user_id')
                    ->references('id')
                    ->on('users')
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
        Schema::dropIfExists('companies');
    }
}
