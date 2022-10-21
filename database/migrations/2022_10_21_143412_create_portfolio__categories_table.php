<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio__categories', function (Blueprint $table) {
            $table->id('port_cate_id');
            $table->string('port_cate_title');
            $table->string('port_cate_image')->nullable();
            $table->string('port_cate_slug',50);
            $table->integer('port_cate_status')->default(1);
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
        Schema::dropIfExists('portfolio__categories');
    }
}
