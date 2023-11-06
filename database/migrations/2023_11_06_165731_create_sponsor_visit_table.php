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
        Schema::create('sponsor_visit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('doc_invitation_letter')->nullable();
            $table->string('doc_invitation_letter_status')->nullable();
            $table->timestamp('doc_invitation_letter_status_update_at')->nullable();
            $table->string('doc_residence_permit')->nullable();
            $table->string('doc_residence_permit_status')->nullable();
            $table->timestamp('doc_residence_permit_status_update_at')->nullable();
            $table->string('doc_evidence_of_available_accommodation')->nullable();
            $table->string('doc_evidence_of_available_accommodation_status')->nullable();
            $table->timestamp('doc_evidence_of_available_accommodation_status_update_at')->nullable();
            $table->string('doc_financial_statement_of_host')->nullable();
            $table->string('doc_financial_statement_of_host_status')->nullable();
            $table->timestamp('doc_financial_statement_of_host_status_update_at')->nullable();
            $table->string('doc_accountant_letter_and_tax_records')->nullable();
            $table->string('doc_accountant_letter_and_tax_records_status')->nullable();
            $table->timestamp('doc_accountant_letter_and_tax_records_status_update_at')->nullable();
            $table->string('doc_birth_or_marriage_certificate')->nullable();
            $table->string('doc_birth_or_marriage_certificate_status')->nullable();
            $table->timestamp('doc_birth_or_marriage_certificate_status_update_at')->nullable();
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
        Schema::dropIfExists('sponsor_visit');
    }
};
