<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngrediantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingrediants', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned(false);

            $table->Integer('admin_ingredient_id')->nullable();
            $table->foreign('admin_ingredient_id')->references('id')->on('admin_ingredients')->onUpdate('cascade')->onDelete('cascade');

            $table->Integer('admin_ingredient_type_id')->nullable();
            $table->foreign('admin_ingredient_type_id')->references('id')->on('admin_ingredient_types')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('ingrediants');
    }
}
