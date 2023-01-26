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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('harga');
            $table->enum('jeniskelamin',['man','woman'])->require();
            $table->string('foto');
            $table->unsignedBigInteger('rating_id')->foreign;
            $table->foreign('rating_id')->references('id')->on('ratings')->onDelete('restrict');
            $table->unsignedBigInteger('product_1')->foreign;
            $table->foreign('product_1')->references('id')->on('products')->onDelete('restrict');
            $table->unsignedBigInteger('product_2')->foreign;
            $table->foreign('product_2')->references('id')->on('products')->onDelete('restrict');
            $table->unsignedBigInteger('product_3')->foreign;
            $table->foreign('product_3')->references('id')->on('products')->onDelete('restrict');
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
        Schema::dropIfExists('sellers');
    }
};
