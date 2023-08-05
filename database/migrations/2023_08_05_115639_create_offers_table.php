<?php
// database/migrations/2023_08_06_345678_create_offers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->integer('discount');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
