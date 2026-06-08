<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::create('classrooms', function (Blueprint $table) {
        $table->id();
        $table->string('name');        // contoh: Kelas A, Kelas B
        $table->string('teacher');     // nama wali kelas
        $table->year('academic_year'); // tahun ajaran
        $table->timestamps();
    });
}
};
