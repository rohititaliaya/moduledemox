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
            $table->id('order_id');
            $table->date('order date');
            $table->string('del_rates');
            $table->string('Grand_total');
            $table->string('status');
            $table->string('customer_nm');
            $table->text('shipping_Adrees');
            $table->text('billing_Adrees');
            $table->string('pro_name');
            $table->integer('pprice');
            $table->text('pro_mt_title');
            $table->text('pro_mt_des');
            $table->longText('pro_des');
            $table->longText('pro_mt_keyword');
            $table->integer('avail_qty');
            $table->integer('prox_id');
            // $table->foreign('prox_id')->references('pro_id')->on('products');
            $table->integer('u_id');
            // $table->foreign('u_id')->references('u_id')->on('users');
            $table->integer('ux_id');
            // $table->foreign('ux_id')->references('ux_id')->on('vendors');
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
