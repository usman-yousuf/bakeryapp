<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->increments('id')->unsigned(false);

            $table->string('name');
            $table->string('slug');
            $table->double('price', 10, 2)->default(0.00);

            $table->boolean('is_purchase_enabled')->default(false);
            $table->boolean('is_product_enabled')->default(false);
            $table->boolean('is_sales_enabled')->default(false);
            $table->boolean('is_accounts_enabled')->default(false);

            $table->enum('status', ['active', 'inactive'])->default('active');

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
        Schema::dropIfExists('subscription_plans');
    }
}
