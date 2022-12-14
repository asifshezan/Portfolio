<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->bigIncrements('cm_id');
            $table->string('cm_name')->nullable();
            $table->string('cm_email')->nullable();
            $table->string('cm_subject')->nullable();
            $table->string('cm_phone')->nullable();
            $table->string('cm_message')->nullable();
            $table->string('cm_slug',50);
            $table->string('cm_status')->default(1);
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
        Schema::dropIfExists('contact_messages');
    }
}
