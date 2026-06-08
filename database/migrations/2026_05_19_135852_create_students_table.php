<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('nis')->unique();
        $table->string('name');
        $table->date('birth_date');
        $table->enum('gender', ['L', 'P']);
        $table->string('parent_name');
        $table->string('phone');
        $table->text('address');
        $table->string('photo')->nullable();
        $table->foreignId('classroom_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}
};
