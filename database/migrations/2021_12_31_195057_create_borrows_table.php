<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->foreignId('Bid');
            $table->unsignedBigInteger('Mid');
            $table->unsignedBigInteger('OPid');
            $table->date('brdate');
            $table->date('returndate');

            $table->foreign('Mid')->references('Mid')->on('members')->onDelete('cascade');
            $table->foreign('OPid')->references('OPid')->on('operators')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrows');
    }
}
