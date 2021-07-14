<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductIngrediantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_ingrediants', function (Blueprint $table) {

            $table->Increments('id')->unsigned(false);

            $table->bigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');

            $table->bigInteger('ingrediant_id');
            $table->foreign('ingrediant_id')->references('id')->on('ingrediants')->onDelete('cascade')->onUpdate('cascade');

            $table->decimal('quantity', 20, 6)->default(false)->nullable();

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
        Schema::dropIfExists('product_ingrediants');
    }
}
