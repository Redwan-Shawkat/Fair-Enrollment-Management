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
        Schema::create('promotional_offer', function (Blueprint $table) {
            $table->id();
            $table->string('prom_offer_name');
            $table->string('logo');
            $table->enum('is_active',['active','inactive']);
            $table->date('validate_from');
            $table->date('validate_to');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotional_offer');
    }
};
