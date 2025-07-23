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
        Schema::create('controls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('framework_id')->constrained('frameworks')->cascadeOnDelete();
            $table->string('control_code')->index();
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('control_questions', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('control_id');
        $table->text('question');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controls');
        Schema::dropIfExists('control_questions');
    }
};
