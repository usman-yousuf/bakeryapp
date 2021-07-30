<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateProductIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_ingredients', function (Blueprint $table) {
            $table->Increments('id')->unsigned(false);

            $table->Integer('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');

            $table->Integer('purchase_list_id')->nullable();
            $table->foreign('purchase_list_id')->references('id')->on('purchase_lists')->onDelete('cascade')->onUpdate('cascade');

            $table->Integer('admin_ingredient_id')->nullable();
            $table->foreign('admin_ingredient_id')->references('id')->on('admin_ingredients')->onDelete('cascade')->onUpdate('cascade');

            $table->Integer('admin_ingredient_type_id')->nullable();
            $table->foreign('admin_ingredient_type_id')->references('id')->on('admin_ingredient_types')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('quantity');
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
        Schema::dropIfExists('product_ingredients');
    }
}
