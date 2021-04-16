<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    // run migrations
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string("first_name", 50);
            $table->string("last_name", 50);
            $table->string("username", 20);
            $table->boolean("dark_mode");
            $table->timestamps();
        });
    }

    // reverse migration
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
