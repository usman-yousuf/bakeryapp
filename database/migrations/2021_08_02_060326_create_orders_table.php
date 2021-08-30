<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->Increments('id')->unsigned(false);

            $table->Integer('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');

            $table->Integer('admin_product_type_id')->nullable();
            $table->foreign('admin_product_type_id')->references('id')->on('admin_product_types')->onUpdate('cascade')->onDelete('cascade');

            $table->Integer('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->string('client_name')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('delivery_address')->nullable();
            $table->enum('order_status', ['new-order','in-baking','ready-to-deliver','sold','other']);
            $table->decimal('advance_payment')->nullable();
            $table->decimal('quantity')->nullable();
            $table->string('unit')->nullable();
            $table->decimal('total_price')->nullable();
            $table->decimal('raw_material')->nullable();
            $table->decimal('tax')->nullable();
            $table->decimal('packing')->nullable();
            $table->decimal('profit')->nullable();

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
        Schema::dropIfExists('orders');
    }
}
