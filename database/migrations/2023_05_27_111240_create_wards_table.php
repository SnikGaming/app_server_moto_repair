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
        if (!Schema::hasTable('wards')) {
            Schema::create('wards', function (Blueprint $table) {
                $table->integer('wards_id')->unsigned();
                $table->integer('district_id')->unsigned();
                $table->string('name', 64);
                
                $table->primary('wards_id');
                $table->foreign('district_id')->references('district_id')->on('district');
            });
        }
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wards');
    }
};
