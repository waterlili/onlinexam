<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_info_id')->unsigned()->index();
            $table->integer('job_id')->unsigned()->index();
            $table->foreign('user_info_id')->references('id')->on('user_infos');
            $table->foreign('job_id')->references('id')->on('jobs');
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
        Schema::dropIfExists('user_jobs');
    }
}
