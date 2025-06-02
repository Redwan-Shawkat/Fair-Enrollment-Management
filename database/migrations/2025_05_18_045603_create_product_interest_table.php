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
        Schema::create('product_interest', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('companyid')->nullable();
            $table->string('name');
            $table->enum('active_status',['active','inactive'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_interests');
    }
};
