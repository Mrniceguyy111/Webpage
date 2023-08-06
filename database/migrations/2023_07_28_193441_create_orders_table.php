<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            // Info order
            $table->unsignedBigInteger('user_id');
            $table->timestamp('order_date');
            $table->string('status');
            $table->integer('value');
            $table->unsignedBigInteger('delivery_address');

            //PayU request
            $table->string('reference');
            $table->string('payu_order_id')->nullable();
            $table->string('transaction_id')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('delivery_address')->references('id')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
