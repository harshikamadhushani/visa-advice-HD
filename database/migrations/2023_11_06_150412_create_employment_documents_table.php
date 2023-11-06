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
        Schema::create('employment_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('doc_employee')->nullable();
            $table->string('doc_employee_status')->nullable();
            $table->timestamp('doc_employee_status_updated_at')->nullable();
            $table->string('doc_self_employed')->nullable();
            $table->string('doc_self_employed_status')->nullable();
            $table->timestamp('doc_self_employed_status_updated_at')->nullable();
            $table->string('doc_retired')->nullable();
            $table->string('doc_retired_status')->nullable();
            $table->timestamp('doc_retired_status_updated_at')->nullable();
            $table->string('doc_students')->nullable();
            $table->string('doc_students_status')->nullable();
            $table->timestamp('doc_students_status_updated_at')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employment_documents');
    }
};
