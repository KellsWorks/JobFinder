<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryIconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_icons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jobs_category_id')->unsigned()->nullable();
            $table->foreign('jobs_category_id')->references('id')->on('jobs_categories');
            $table->string('icon');
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
        Schema::dropIfExists('category_icons');
    }
}
