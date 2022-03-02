<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_opening', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->unique();
            $table->float('rate');
            $table->timestamps();
        });
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('description');
            $table->float('rate');
            $table->bigInteger('sku')->nullable();
            $table->foreignId('vandor_id')->nullable();
            $table->foreignId('opening_id')->constrained('product_opening')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('category_id')->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('product_storage', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('product_opening')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('warehouse_id');
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
        Schema::dropIfExists('product_opening');
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_storage');
    }
}
