<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentResponcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_responces', function (Blueprint $table) {
            $table->id();
            $table->string('currency');
            $table->integer('actual_amount');
            $table->string('order_status');
            $table->string('response_status');
            $table->timestamp('order_time');
            $table->string('actual_currency');
            $table->string('order_id');
            $table->integer('payment_id');
            $table->string('signature');
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
        Schema::dropIfExists('payment_responces');
    }
}
