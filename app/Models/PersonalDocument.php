<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonalDocument extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'personal_documents';
    protected $fillable = [
        'user_id',
        'doc_current_or_previous_passport',
        'doc_current_or_previous_passport_status',
        'doc_current_or_previous_passport_status_update_at',
        'doc_currently_live',
        'doc_currently_live_status',
        'doc_currently_live_status_update_at',
        'doc_birth_certificate',
        'doc_birth_certificate_status',
        'doc_birth_certificate_status_update_at',
        'doc_marriage_certificate',
        'doc_marriage_certificate_status',
        'doc_marriage_certificate_status_update_at',
        'doc_birth_certificate_children',
        'doc_birth_certificate_children_status',
        'doc_birth_certificate_children_status_update_at',
        'doc_previous_visa_refusals',
        'doc_previous_visa_refusals_status',
        'doc_previous_visa_refusals_status_update_at',
        'doc_vaccination_proof',
        'doc_vaccination_proof_status',
        'doc_vaccination_proof_update_at',
        'doc_status_updated_by',
    ];

}
