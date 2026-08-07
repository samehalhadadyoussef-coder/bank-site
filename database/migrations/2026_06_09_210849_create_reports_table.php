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

            $table->string('subject');

            $table->text('message');

            $table->enum('report_type', [
                'Complaint',
                'Suggestion',
                'Inquiry'
            ]);

            $table->enum('status', [
                'Pending',
                'In Progress',
                'Resolved'
            ])->default('Pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
