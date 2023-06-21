<?php

use Carbon\Carbon;
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
            $table->unsignedBigInteger('user_id');
            $table->tinyInteger('status')->default(1);
            $table->integer('total_price')->default(0);
            $table->Text('address')->default(0);
            $table->String('name')->default(0);
            $table->integer('payment')->default(1);
            $table->Text('note')->nullable();
            $table->integer('ship')->default(0);
            $table->dateTime('booking_date')->default(Carbon::now());
            $table->dateTime('delivery_date')->default(Carbon::now());
            $table->timestamps();
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
