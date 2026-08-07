<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('atms', function (Blueprint $table) {
            $table->id();

            $table->string('code')->unique(); // ATM-001
            $table->string('branch')->nullable(); // Cairo Branch

            $table->enum('status', ['online', 'offline', 'maintenance'])->default('online');

            $table->integer('cash_level')->default(1000000); // percentage

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('atms');
    }
};
