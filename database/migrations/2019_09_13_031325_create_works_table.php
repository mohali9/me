<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('image1');
            $table->string('title1');
            $table->string('description1');
            $table->text('image2');
            $table->string('title2');
            $table->string('description2');
            $table->text('image3');
            $table->string('title3');
            $table->string('description3');
            $table->text('image4');
            $table->string('title4');
            $table->string('description4');
            $table->text('image5');
            $table->string('title5');
            $table->string('description5');
            $table->text('image6');
            $table->string('title6');
            $table->string('description6');
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
        Schema::dropIfExists('works');
    }
}
