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
        Schema::create('non_sponsor_visit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('doc_receipt_of_hotel_reservation')->nullable();
            $table->string('doc_receipt_of_hotel_reservation_status')->nullable();
            $table->timestamp('doc_receipt_of_hotel_reservation_status_update_at')->nullable();
            $table->string('doc_evidence_of_sufficient_funds')->nullable();
            $table->string('doc_evidence_of_sufficient_funds_status')->nullable();
            $table->timestamp('doc_evidence_of_sufficient_funds_status_update_at')->nullable();
            $table->string('doc_travel_itinerary')->nullable();
            $table->string('doc_travel_itinerary_status')->nullable();
            $table->timestamp('doc_travel_itinerary_status_update_at')->nullable();
            $table->string('doc_life_insurance')->nullable();
            $table->string('doc_life_insurance_status')->nullable();
            $table->timestamp('doc_life_insurance_status_update_at')->nullable();
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
        Schema::dropIfExists('non_sponsor_visit');
    }
};
