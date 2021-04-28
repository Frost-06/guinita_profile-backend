<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //table creation for myinfo
        Schema::create('myinfo', function (Blueprint $table) {
            $table->id();
            $table->string('imglink');
            $table->string('firstname');
            $table->string('mi');
            $table->string('lastname');
            $table->string('email');
            $table->string('address');
            $table->string('phonenumber');
            $table->longText('description');
            $table->string('age');
            $table->string('birthday');
            $table->string('gender');
            $table->string('status');
            $table->string('religion');
            $table->string('educcollegeprogram');
            $table->string('educcollegeschool');
            $table->string('educcollegedate');
            $table->string('educseniorhighschool');
            $table->string('educseniorhighdate');
            $table->string('educjuniorhighchool');
            $table->string('educjuniorhighdate');
            $table->string('educprimaryschool');
            $table->string('educprimarydate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('myinfo');
    }
}
