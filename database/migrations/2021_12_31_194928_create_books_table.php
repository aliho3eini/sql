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
            $table->foreignId('Bid')->autoIncrement()->comment(' کد کتاب ');
            $table->string('title')->comment('نام');
            $table->date('Bdate')->comment('تاریخ چاپ');
            $table->unsignedBigInteger('Cid')->comment('شماره دسته ');
            $table->unsignedBigInteger('Pid')->comment('شماره شناسایی ناشر');
            $table->unsignedBigInteger('Aid')->comment('شماره شناسایی نویسنده');

            $table->foreign('Cid')->references('Cid')->on('categories')->onDelete('cascade');
            $table->foreign('Pid')->references('Pid')->on('publishers')->onDelete('cascade');
            $table->foreign('Aid')->references('Aid')->on('authors')->onDelete('cascade');
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
