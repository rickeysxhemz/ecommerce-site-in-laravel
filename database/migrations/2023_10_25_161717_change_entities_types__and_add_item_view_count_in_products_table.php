<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeEntitiesTypesAndAddItemViewCountInProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('status')->nullable()->change();
            $table->longText('eanList')->nullable()->change();
            $table->integer('item_view_count')->after('selling_count')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('status')->nullable(false)->change(); 
            $table->longText('eanList')->nullable(false)->change();
            $table->dropColumn('item_view_count'); 
        });
    }
}
