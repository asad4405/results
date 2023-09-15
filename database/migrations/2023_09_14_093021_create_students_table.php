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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('class_name');
            $table->text('address');
            $table->integer('session_year');
            $table->string('group');
            $table->string('student_type');
            $table->string('gender');
            $table->date('birthday_date');
            $table->string('birthday_certificate_no');
            $table->string('school_name');
            $table->string('phone_number');
            $table->string('guardians_phone_number');
            $table->string('roll_no')->unique();
            $table->string('reg_no')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
