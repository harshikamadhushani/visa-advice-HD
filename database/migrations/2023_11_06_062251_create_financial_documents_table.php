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
        Schema::create('financial_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('doc_saving_account')->nullable();
            $table->string('doc_saving_account_status')->nullable();
            $table->timestamp('doc_saving_account_status_update_at')->nullable();
            $table->string('doc_fixed_deposit_accounts')->nullable();
            $table->string('doc_fixed_deposit_accounts_status')->nullable();
            $table->timestamp('doc_fixed_deposit_accounts_status_update_at')->nullable();
            $table->string('doc_current_accounts')->nullable();
            $table->string('doc_current_accounts_status')->nullable();
            $table->timestamp('doc_current_accounts_status_update_at')->nullable();
            $table->string('doc_money_of_credit_cards')->nullable();
            $table->string('doc_money_of_credit_cards_status')->nullable();
            $table->timestamp('doc_money_of_credit_cards_status_update_at')->nullable();
            $table->string('doc_insurance')->nullable();
            $table->string('doc_insurance_status')->nullable();
            $table->timestamp('doc_insurance_status_update_at')->nullable();
            $table->string('doc_evidence_of_assets')->nullable();
            $table->string('doc_evidence_of_assets_status')->nullable();
            $table->timestamp('doc_evidence_of_assets_status_update_at')->nullable();
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
        Schema::dropIfExists('financial_documents');
    }
};
