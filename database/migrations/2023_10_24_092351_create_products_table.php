<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->text('url')->nullable();
            $table->text('asin')->nullable();
            $table->text('title')->nullable();
            $table->text('brand')->nullable();
            $table->text('productGroup')->nullable();
            $table->text('partNumber')->nullable();
            $table->text('color')->nullable();
            $table->text('size')->nullable();
            $table->text('binding')->nullable();
            $table->longText('categoryTree')->nullable();
            $table->longText('languages')->nullable();
            $table->text('description')->nullable();
            $table->float('packageHeight')->nullable();
            $table->float('packageLength')->nullable();
            $table->float('packageWidth')->nullable();
            $table->float('packageWeight')->nullable();
            $table->float('packageQuantity')->nullable();
            $table->float('itemHeight')->nullable();
            $table->float('itemLength')->nullable();
            $table->float('itemWidth')->nullable();
            $table->float('itemWeight')->nullable();
            $table->integer('isAdultProduct')->nullable();
            $table->integer('lastSoldUpdate')->nullable();
            $table->integer('monthlySold')->nullable();
            $table->integer('selling_count')->nullable();
            $table->integer('lastUpdate')->nullable();
            $table->integer('lastPriceChange')->nullable();
            $table->integer('salesRankReference')->nullable();
            $table->integer('lastRatingUpdate')->nullable();
            $table->integer('hasReviews')->nullable();
            $table->integer('buyBoxPrice')->nullable();
            $table->integer('buyBoxShipping')->nullable();
            $table->longText('fbaFees')->nullable();
            $table->longText('upcList')->nullable();
            $table->longText('eanList');
            $table->longText('frequentlyBoughtTogether')->nullable();
            $table->longText('type')->nullable();
            $table->longText('imagesCSV')->nullable();
            $table->integer('referralFeePercent')->nullable();
            $table->integer('available_qty')->nullable();
            $table->integer('min_order')->nullable();
            $table->float('unit_cost')->nullable();
            $table->float('profit')->nullable();
            $table->integer('amazonSelling')->nullable();
            $table->text('our_code')->nullable();
            $table->text('distribute')->nullable();
            $table->integer('amazonPrice')->nullable();
            $table->integer('isAmazonProduct')->default(0);
            $table->float('amazonUS')->nullable();
            $table->float('amazonCA')->nullable();
            $table->float('amazonMX')->nullable();
            $table->float('amazonGB')->nullable();
            $table->float('amazonDE')->nullable();
            $table->float('amazonFR')->nullable();
            $table->float('amazonIT')->nullable();
            $table->float('amazonES')->nullable();
            $table->float('amazonNL')->nullable();
            $table->float('amazonBE')->nullable();
            $table->float('amazonSE')->nullable();
            $table->float('amazonPL')->nullable();
            $table->float('amazonSG')->nullable();
            $table->float('amazonAT')->nullable();
            $table->float('amazonJP')->nullable();
            $table->float('amazonAE')->nullable();
            $table->float('amazonSA')->nullable();
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
        Schema::dropIfExists('products');
    }
}
