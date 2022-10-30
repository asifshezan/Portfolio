<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id('exp_id');
            $table->string('exp_year',20)->nullable();
            $table->string('exp_title')->nullable();
            $table->string('exp_subtitle')->nullable();
            $table->string('exp_text')->nullable();
            $table->string('exp_slug',50)->nullable();
            $table->integer('exp_status')->default(1);
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
        Schema::dropIfExists('experiences');
    }
}
