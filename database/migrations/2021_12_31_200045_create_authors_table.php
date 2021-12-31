<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->foreignId('Aid')->autoIncrement()->comment('شماره شناسایی نویسنده');
            $table->string('Afname')->comment('نام نویسنده');
            $table->string('Alname')->comment('نام خانوادگی نویسنده');
            $table->date('Abirthday')->comment('تاریخ تولد نویسنده');
            $table->string('Acity')->comment('شهر نویسنده');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
