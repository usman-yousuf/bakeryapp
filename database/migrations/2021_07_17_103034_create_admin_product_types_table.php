<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminProductTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_product_types', function (Blueprint $table) {
            $table->Increments('id')->unsigned(false);

            $table->Integer('admin_product_id');
            $table->foreign('admin_product_id')->references('id')->on('admin_products')->onDelete('cascade')->onUpdate('cascade');

            $table->string('type_name')->nullable();
            $table->string('size')->nullable();

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
        Schema::dropIfExists('admin_product_types');
    }
}
