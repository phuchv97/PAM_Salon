<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceUsageHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_usage_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('guest_id');
            $table->integer('reservation_id');
            $table->integer('feedback_service_id');
            $table->integer('feedback_produce_id');
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
        Schema::dropIfExists('service_usage_history');
    }
}
