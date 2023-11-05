<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('personal_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('doc_current_or_previous_passport')->nullable();
            $table->string('doc_current_or_previous_passport_status')->nullable();
            $table->timestamp('doc_current_or_previous_passport_status_update_at')->nullable();
            $table->string('doc_currently_live')->nullable();
            $table->string('doc_currently_live_status')->nullable();
            $table->timestamp('doc_currently_live_status_update_at')->nullable();
            $table->string('doc_birth_certificate')->nullable();
            $table->string('doc_birth_certificate_status')->nullable();
            $table->timestamp('doc_birth_certificate_status_update_at')->nullable();
            $table->string('doc_marriage_certificate')->nullable();
            $table->string('doc_marriage_certificate_status')->nullable();
            $table->timestamp('doc_marriage_certificate_status_update_at')->nullable();
            $table->string('doc_birth_certificate_children')->nullable();
            $table->string('doc_birth_certificate_children_status')->nullable();
            $table->timestamp('doc_birth_certificate_children_status_update_at')->nullable();
            $table->string('doc_previous_visa_refusals')->nullable();
            $table->string('doc_previous_visa_refusals_status')->nullable();
            $table->timestamp('doc_previous_visa_refusals_status_update_at')->nullable();
            $table->string('doc_vaccination_proof')->nullable();
            $table->string('doc_vaccination_proof_status')->nullable();
            $table->timestamp('doc_vaccination_proof_update_at')->nullable();
            $table->string('doc_status_updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('personal_documents', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_documents');
    }
};
