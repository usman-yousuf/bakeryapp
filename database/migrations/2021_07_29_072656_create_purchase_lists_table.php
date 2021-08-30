<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_lists', function (Blueprint $table) {
            $table->Increments('id')->unsigned(false);

            $table->Integer('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->Integer('admin_ingredient_id');
            $table->foreign('admin_ingredient_id')->references('id')->on('admin_ingredients')->onDelete('cascade')->onUpdate('cascade');

            $table->Integer('admin_ingredient_type_id');
            $table->foreign('admin_ingredient_type_id')->references('id')->on('admin_ingredient_types')->onDelete('cascade')->onUpdate('cascade');

            $table->string('store_name');
            $table->integer('quantity');
            $table->string('unit')->nullable();
            $table->double('price');


            $table->softDeletes();
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
        Schema::dropIfExists('purchase_lists');
    }
}
