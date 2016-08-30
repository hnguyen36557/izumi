<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('cate_id');
           $table->string('name');
           $table->string('slug');
           $table->integer('price');
           $table->longText('content');
           $table->integer('discount');
           $table->string('image');
           $table->string('title');
           $table->string('meta_desc');
           $table->string('meta_key');
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
        Schema::drop('products');
    }
}
