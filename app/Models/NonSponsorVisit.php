<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NonSponsorVisit extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'non_sponsor_visit';
    protected $fillable = [
        'user_id',
        'doc_receipt_of_hotel_reservation',
        'doc_receipt_of_hotel_reservation_status',
        'doc_receipt_of_hotel_reservation_status_update_at',
        'doc_evidence_of_sufficient_funds',
        'doc_evidence_of_sufficient_funds_status',
        'doc_evidence_of_sufficient_funds_status_update_at',
        'doc_travel_itinerary',
        'doc_travel_itinerary_status',
        'doc_travel_itinerary_status_update_at',
        'doc_life_insurance',
        'doc_life_insurance_status',
        'doc_life_insurance_status_update_at',
    ];
}
