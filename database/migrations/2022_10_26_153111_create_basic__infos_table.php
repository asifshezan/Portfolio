<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic__infos', function (Blueprint $table) {
            $table->id('info_id');
            $table->string('info_name')->nullable();
            $table->string('info_location')->nullable();
            $table->string('info_birth')->nullable();
            $table->string('info_email')->nullable();
            $table->string('info_phone')->nullable();
            $table->string('info_website')->nullable();
            $table->string('info_facebook')->nullable();
            $table->string('info_instagram')->nullable();
            $table->string('info_linkedin')->nullable();
            $table->string('info_google')->nullable();
            $table->string('info_image',50)->nullable();
            $table->integer('info_status')->default(1);
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
        Schema::dropIfExists('basic__infos');
    }
}
