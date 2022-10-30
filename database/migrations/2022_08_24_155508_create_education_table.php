<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('edu_id');
            $table->string('edu_year',20)->nullable();
            $table->string('edu_image',50)->nullable();
            $table->string('edu_title')->nullable();
            $table->string('edu_subtitle')->nullable();
            $table->string('edu_text')->nullable();
            $table->string('edu_slug',50)->nullable();
            $table->integer('edu_status')->default(1);
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
