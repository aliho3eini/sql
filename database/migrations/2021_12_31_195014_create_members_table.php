<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->foreignId('Mid')->autoIncrement();
            $table->string('Mfname')->comment('نام ');
            $table->string('Mlname')->comment('نام خانوادگی ');
            $table->date('Mbirthday')->comment('تاریخ تولد ');
            $table->string('Mcity')->comment('شهر ');
            $table->date('Mshipdate')->comment('تاریخ عضویت ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
