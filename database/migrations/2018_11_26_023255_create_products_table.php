<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->text('long_description')->nullable();
            $table->float('price');
            #clave foranea (fk)
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->integer('reference');
            $table->integer('total')->nullable();
            $table->integer('talla_21')->nullable();
            $table->integer('talla_22')->nullable();
            $table->integer('talla_23')->nullable();
            $table->integer('talla_24')->nullable();
            $table->integer('talla_25')->nullable();
            $table->integer('talla_26')->nullable();
            $table->integer('talla_27')->nullable();
            $table->integer('talla_28')->nullable();
            $table->integer('talla_29')->nullable();
            $table->integer('talla_30')->nullable();
            $table->integer('talla_31')->nullable();
            $table->integer('talla_32')->nullable();
            $table->integer('talla_33')->nullable();
            $table->integer('talla_34')->nullable();
            $table->integer('talla_35')->nullable();
            $table->integer('talla_36')->nullable();
            $table->integer('talla_37')->nullable();
            $table->integer('talla_38')->nullable();
            $table->integer('talla_39')->nullable();
            $table->integer('talla_40')->nullable();

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
