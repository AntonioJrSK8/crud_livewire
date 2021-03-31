<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('books', function (Blueprint $table) {
            $table->id()->increments('id')->unsigned();
            $table->string('name');
            $table->integer('pages')->nullable();
            $table->string('author')->nullable();
            $table->string('email')->nullable();
            $table->integer('status')->nullable();
            
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('books');
    }
}
