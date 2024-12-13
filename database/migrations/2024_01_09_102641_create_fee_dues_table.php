<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fee_dues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fee_groups_id');
            $table->foreign('fee_groups_id')->references('id')->on('fee_groups');

            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')->on('classes');

            $table->unsignedBigInteger('section_id');
            $table->foreign('section_id')->references('id')->on('sections');

            $table->unsignedBigInteger('student_session_id');
            $table->foreign('student_session_id')->references('id')->on('student_sessions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fee_dues');
    }
};
