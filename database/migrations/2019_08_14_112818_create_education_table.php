<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('title1');
            $table->text('description1');
            $table->string('title2');
            $table->text('description2');
            $table->string('title3');
            $table->text('description3');
            $table->string('title4');
            $table->text('description4');
            $table->string('title5');
            $table->text('description5');
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
        Schema::dropIfExists('education');
    }
}
