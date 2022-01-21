<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table("users", function(Blueprint $table) {
            $table->string("phone", 10)->nullable()->after("email");
            $table->enum("type", ["Admin","Seller","Client"]);
            $table->string("last_name", 100)->after("name");
            $table->string("last_name2", 100)->after("last_name");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
