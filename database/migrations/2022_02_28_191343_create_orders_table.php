<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->bigInteger('amount');
            $table->foreignId('buyer_id')->constrained('users')->restrictOnUpdate()->restrictOnDelete();
            $table->json('address');
            $table->string('status')->default('pending');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->integer('rate');
            $table->foreignId('order_id')->constrained('orders')->restrictOnUpdate()->OnDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->bigInteger('amount');
            $table->foreignId('buyer_id')->constrained('users')->restrictOnUpdate()->restrictOnDelete();
            $table->json('address');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('purchase_products', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->integer('rate');
            $table->foreignId('purchases_id')->constrained('purchases')->restrictOnUpdate()->OnDelete('cascade');
            $table->foreignId('storage_id')->constrained('product_storage');
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
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_products');
        Schema::dropIfExists('purchases');
        Schema::dropIfExists('purchase_products');
    }
}
