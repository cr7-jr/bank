<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{

    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('number');
            $table->string('course_number');
            // $table->string('owners_name');
            $table->string('name_payment');
            $table->string('value');
            $table->date('relase_date');
            $table->string('bill_type');
            $table->integer('bank_id')->unsigned();
            $table->foreign('bank_id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('receipts');
    }
}
