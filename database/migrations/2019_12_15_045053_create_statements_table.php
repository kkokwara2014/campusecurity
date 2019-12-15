<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('complainant');
            $table->string('gender');
            $table->integer('location_id');
            $table->string('regnumber');
            $table->string('phone');
            $table->string('religion');
            $table->string('dateofevent');
            $table->string('timeofevent');
            $table->string('casetype');
            $table->integer('user_id');
            $table->text('entry');
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
        Schema::dropIfExists('statements');
    }
}
