<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jobs_category_id')->unsigned()->nullable();
            // $table->foreign('jobs_category_id')->references('id')->on('jobs_category');
            $table->string('employer');
            $table->string('employer-logo')->default('employer-logo.png');
            $table->string('title');
            $table->string('description');
            $table->text('content');
            $table->string('closing_date');
            $table->string('location');
            $table->string('duration')->default('Full-time');
            $table->string('salary')->default('unspecified');
            $table->string('employer_email');
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
        Schema::dropIfExists('jobs');
    }
}
