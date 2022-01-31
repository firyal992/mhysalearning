<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            // $table->foreignId('courses_id');
            $table->string('profile_pic');
            $table->string('pengalaman_kerja');
            $table->string('skill');
            $table->string('link_linkedin');
            $table->string('link_ig');
            $table->string('insta_un');
            $table->string('linkedin_un');
            $table->string('quote');
            // $table->string('status');
            // $table->string('pengalaman_ngajar');
            $table->string('hal_menarik_dikelas');
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
        Schema::dropIfExists('tutor_details');
    }
}
