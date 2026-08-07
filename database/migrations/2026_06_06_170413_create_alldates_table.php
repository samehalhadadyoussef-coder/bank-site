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
        Schema::create('alldates', function (Blueprint $table) {
            $table->id();
            $table->string('Treasury');
            $table->string('User_Registrations');
            $table->string('Profit_Percentage');
            $table->string('Gross_Loss');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alldates');
    }
};
