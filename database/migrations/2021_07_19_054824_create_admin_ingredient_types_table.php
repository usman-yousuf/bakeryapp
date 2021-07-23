<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminIngredientTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_ingredient_types', function (Blueprint $table) {
            $table->Increments('id')->unsigned(false);

            $table->Integer('admin_ingredient_id');
            $table->foreign('admin_ingredient_id')->references('id')->on('admin_ingredients')->onDelete('cascade')->onUpdate('cascade');

            $table->string('type_name')->nullable();
            $table->string('size')->nullable();
            $table->string('brand_name')->nullable();

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
        Schema::dropIfExists('admin_ingredient_types');
    }
}
