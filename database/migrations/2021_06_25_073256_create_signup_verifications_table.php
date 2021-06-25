<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignupVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signup_verifications', function (Blueprint $table) {
            $table->increments('id')->unsigned(false);
            $table->enum('type', ['email', 'phone','both','none'])->nullable();
            $table->string('email')->index()->nullable();
            $table->string('phone')->index()->nullable();
            $table->string('token');
            
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
        Schema::dropIfExists('signup_verifications');
    }
}
