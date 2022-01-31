<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('tutor_detail_id')->nullable();
            $table->string('nm_course');
            $table->text('class_summary');
            $table->string('jam')->nullable();
            $table->string('tanggal');
            $table->integer('harga');
            $table->string('slug');
            $table->boolean('is_bundle');
            // $table->string('materi'); //list materi yang tersedia. gatau mau make array atau tabel baru
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
        Schema::dropIfExists('courses');
    }
}
