<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomer2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer2s', function (Blueprint $table) {
            $table->id();
            $table->string('u_fnm');
            $table->string('u_lnm');
            $table->string('u_email')->unique();
            $table->integer('u_mo')->unique();
            $table->string('u_pass');  
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
        Schema::dropIfExists('customer2s');
    }
}
