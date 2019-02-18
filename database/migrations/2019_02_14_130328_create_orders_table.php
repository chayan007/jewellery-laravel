<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('order')->default('In Cart')->nullable();
            $table->string('status')->nullable();
            $table->unsignedInteger('product');
            $table->foreign('product')->references('id')->on('products');
            $table->unsignedInteger('customer')->nullable();
            $table->foreign('customer')->references('id')->on('customers');            $table->unsignedInteger('user');
            $table->foreign('user')->references('id')->on('users');
            $table->date('expected')->nullable();
            $table->string('token')->nullable();
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
