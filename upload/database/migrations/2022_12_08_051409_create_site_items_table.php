<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_items', function (Blueprint $table) {
            $table->id();
            $table->longText('url')->nullable();
            $table->longText('text')->nullable();
            $table->longText('sub_text')->nullable();
            $table->longText('category')->nullable();
            $table->longText('site_area')->nullable();
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
        Schema::dropIfExists('site_items');
    }
};
