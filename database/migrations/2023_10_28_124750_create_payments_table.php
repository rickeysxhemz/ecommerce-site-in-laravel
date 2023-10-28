<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("order_id")->nullable();
            $table->text("name")->nullable();
            $table->text("card_number")->nullable();
            $table->text("cvv")->nullable();
            $table->text("month")->nullable();
            $table->text("year")->nullable();
            $table->text("amount")->nullable();
            $table->text("currency")->default("USD");
            $table->text("status")->default("pending");
            $table->text("payment_method")->default("stripe");
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
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
        Schema::dropIfExists('payments');
    }
}
