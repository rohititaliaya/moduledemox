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
            $table->id('pro_id');
            $table->string('pro_name');
            $table->integer('pprice');
            $table->text('pro_mt_title');
            $table->text('pro_mt_des');
            $table->longText('pro_des');
            $table->longText('pro_mt_keyword');
            $table->integer('avail_qty');
            $table->timestamp('created_at')->useCurrent();
        });
        Schema::create('Attribute', function (Blueprint $table) {
            $table->id('pro_id');
            $table->foreign('pro_id')->references('pro_id')->on('products');
            $table->string('atrr_name');
            $table->text('attr_value');
        });
        Schema::create('add_images', function (Blueprint $table) {
            $table->id('pro_id');
            $table->foreign('pro_id')->references('pro_id')->on('products');
            $table->string('img_path');
            $table->text('img_order');
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
