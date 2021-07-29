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
            $table->Increments('id')->unsigned(false);

            $table->Integer('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->Integer('admin_product_id')->nullable();
            $table->foreign('admin_product_id')->references('id')->on('admin_products')->onUpdate('cascade')->onDelete('cascade');

            $table->Integer('admin_product_type_id')->nullable();
            $table->foreign('admin_product_type_id')->references('id')->on('admin_product_types')->onUpdate('cascade')->onDelete('cascade');

            $table->string('size')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('price')->nullable();

            $table->timestamps();
            $table->softDeletes();
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
