<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FinancialDocument extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'financial_documents';
    protected $fillable = [
        'user_id',
        'doc_saving_account',
        'doc_saving_account_status',
        'doc_saving_account_status_update_at',
        'doc_fixed_deposit_accounts',
        'doc_fixed_deposit_accounts_status',
        'doc_fixed_deposit_accounts_status_update_at',
        'doc_current_accounts',
        'doc_current_accounts_status',
        'doc_current_accounts_status_update_at',
        'doc_money_of_credit_cards',
        'doc_money_of_credit_cards_status',
        'doc_money_of_credit_cards_status_update_at',
        'doc_insurance',
        'doc_insurance_status',
        'doc_insurance_status_update_at',
        'doc_evidence_of_assets',
        'doc_evidence_of_assets_status',
        'doc_evidence_of_assets_status_update_at',
    ];
}
