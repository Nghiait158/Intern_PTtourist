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
        Schema::create('rec_forms', function (Blueprint $table) {
            $table->id('recFormID');
            $table->string('name');
            $table->year('yearOfBirth');
            $table->string('place');
            $table->string('email')->unique();
            $table->enum('sex', ['male', 'female']);
            $table->string('placeOfBirth');
            $table->string('phone')->unique();
            $table->string('facebookLink')->nullable();
            $table->string('CVpath');
            $table->enum('longDayWork', ['Co', 'Khong', 'TuyThoiDiem']);
            $table->enum('overtime', ['Co', 'Khong', 'TuyThoiDiem']);;
            $table->text('placeWorkedBefore')->nullable();
            $table->text('personalExperience')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rec_forms');
    }
};
