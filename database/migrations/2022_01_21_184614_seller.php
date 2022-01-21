<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Seller extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("sellers", function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('rfc',13);
            $table->date('birthday');
            $table->softDeletes();// "deleted_at" tipo timestamp 2022-01-20 H:m:s
            $table->timestamps(); // "created_at" y "updated_at" tipo timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }

    
}
