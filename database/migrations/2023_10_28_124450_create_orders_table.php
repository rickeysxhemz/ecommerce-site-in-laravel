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
            $table->text("first_name")->nullable();
            $table->text("last_name")->nullable();
            $table->text("address_1")->nullable();
            $table->text("address_2")->nullable();
            $table->text('city')->nullable();
            $table->text('phone')->nullable();
            $table->text('description')->nullable();
            $table->text('status')->default('pending');            
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
        Schema::dropIfExists('orders');
    }
}
