<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->string('email');

            $table->text('message');

            $table->enum('report_type', [
                'Complaint',
                'Suggestion',
                'Inquiry'
            ])->default('Inquiry');

            $table->string('type')->default('Website');

            $table->date('generated_at')->nullable();

            $table->date('next_run')->nullable();

            $table->string('frequency')->nullable();

            $table->enum('status', [
                'active',
                'scheduled',
                'pending'
            ])->default('pending');

            $table->integer('downloads')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};