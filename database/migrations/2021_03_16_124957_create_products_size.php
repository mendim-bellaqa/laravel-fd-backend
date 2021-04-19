<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsSize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_size', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
            $table->unsignedBigInteger('product_id')->nullable();


            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_size');
    }
}
