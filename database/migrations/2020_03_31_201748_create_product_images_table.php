<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img'); //portrait_1.jpg 	строка, колонка 'img'
            $table->bigInteger('product_id')->unsigned(); //беззнаковое, столбец product_id 
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade'); // ссылка 'product_id' на 'id' в таблице 'products', удаление каскадом
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
        Schema::dropIfExists('product_images');
    }
}
