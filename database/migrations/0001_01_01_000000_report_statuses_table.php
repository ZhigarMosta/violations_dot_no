<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('created_at');
        });

        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes()->nullable();
            $table->foreignId('user_id')
                  ->nullable()
                  ->constrained()
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('statuse_id')
                  ->nullable()
                  ->constrained()
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
        Schema::dropIfExists('statuses');
    }
};
