<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollwedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followed_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jobs_id')->unsigned()->nullable();
            $table->foreign('jobs_id')->references('id')->on('jobs');
            $table->integer('user_id');
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
        Schema::dropIfExists('followed_jobs');
    }
}
