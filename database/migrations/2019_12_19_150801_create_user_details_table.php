<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('document_types_id');
            $table->foreign('document_types_id')->references('id')->on('document_types');
            $table->string('name')->nullable();
            $table->string('username')->nullable();
            $table->dateTime('birthday')->nullable();
            $table->string('birthplace')->nullable();
            $table->enum('gender',['Hombre','Mujer'])->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('landline')->nullable();
            $table->bigInteger('document')->nullable();
            $table->bigInteger('current_place')->nullable();
            $table->date('last_connection');
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
        Schema::dropIfExists('user_details');
    }
}
