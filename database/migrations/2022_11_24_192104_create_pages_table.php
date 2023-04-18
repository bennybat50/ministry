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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url')->unique();
            $table->longText('page_img')->nullable();
            $table->longText('main_content')->nullable();
            $table->longText('row_1_title')->nullable();
            $table->longText('row_1_img')->nullable();
            $table->longText('row_1_content')->nullable();
            $table->longText('row_1_url')->nullable();

            $table->longText('row_2_title')->nullable();
            $table->longText('row_2_img')->nullable();
            $table->longText('row_2_content')->nullable();
            $table->longText('row_2_url')->nullable();

            $table->longText('side_title')->nullable();
            $table->longText('side_img')->nullable();
            $table->longText('side_content')->nullable();
            $table->longText('side_url')->nullable();

            $table->longText('side_sub')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('pages');
    }
};
