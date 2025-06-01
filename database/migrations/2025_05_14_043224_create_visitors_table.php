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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('companyid')->nullable();
            $table->string('visitorname');
            $table->string('visitorcompany');
            $table->string('mobileno')->nullable();
            $table->string('email')->unique();
            $table->enum('gender',['male','female','other'])->nullable();
            $table->string('thoughts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
