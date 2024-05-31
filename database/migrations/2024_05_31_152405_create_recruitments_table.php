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
        Schema::dropIfExists('recruitments');
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id('recruitmentID');
            $table->string('position');
            $table->text('description')->nullable();
            $table->text('requirements')->nullable();
            $table->dateTime('publishedDate');
            $table->text('contactInfo');
            $table->integer('numsOfRecruits')->nullable();
            $table->string('workPlace')->nullable();
            $table->date('dateStartWork')->nullable();
            $table->text('benefits')->nullable();
            $table->integer('age')->nullable();
            $table->string('academicLevel')->nullable();
            $table->text('request_Doc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruitments');
    }
};
