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
        Schema::create('class_one_results', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->string('roll_no');
            $table->string('reg_no');
            $table->integer('year');
            $table->string('class_name');
            $table->integer('bangla');
            $table->integer('english');
            $table->integer('math');
            $table->timestamp('result_publish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_one_results');
    }
};
