<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
          $table->increments('id');
          //Header Foreign key
          $table->integer('cart_id')->unsigned();
          $table->Foreign('cart_id')->references('id')->on('carts');

          //Product Foreign key
          $table->integer('product_id')->unsigned();
          $table->Foreign('product_id')->references('id')->on('products');

          $table->integer('quantity');// cantidad
          $table->integer('discount')->default(0);// % int descuento

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
        Schema::dropIfExists('cart_details');
    }
}
