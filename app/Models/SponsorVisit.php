<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SponsorVisit extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'sponsor_visit';
    protected $fillable = [
        'user_id',
        'doc_invitation_letter',
        'doc_invitation_letter_status',
        'doc_invitation_letter_status_update_at',
        'doc_residence_permit',
        'doc_residence_permit_status',
        'doc_residence_permit_status_update_at',
        'doc_evidence_of_available_accommodation',
        'doc_evidence_of_available_accommodation_status',
        'doc_evidence_of_available_accommodation_status_update_at',
        'doc_financial_statement_of_host',
        'doc_financial_statement_of_host_status',
        'doc_financial_statement_of_host_status_update_at',
        'doc_accountant_letter_and_tax_records',
        'doc_accountant_letter_and_tax_records_status',
        'doc_accountant_letter_and_tax_records_status_update_at',
        'doc_birth_or_marriage_certificate',
        'doc_birth_or_marriage_certificate_status',
        'doc_birth_or_marriage_certificate_status_update_at',
    ];
}
