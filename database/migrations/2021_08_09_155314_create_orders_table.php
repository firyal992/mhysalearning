<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutor_detail_id');
            $table->foreignId('user_id');
            $table->string('tanggal');
            $table->string('mulai');
            $table->string('akhir');
            $table->string('bentuk_acara');
            $table->string('detail_acara');
            $table->string('topik_acara');
            $table->timestamps();
            // $table->integer('user_id');
            // $table->string('date');
            // $table->string('start_time');
            // $table->string('end_time');
            // $table->string('acara')->nullable();
            // $table->string('detail_event')->nullable();
            // $table->text('topic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
