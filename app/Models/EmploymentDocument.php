<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmploymentDocument extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'employment_documents';
    protected $fillable = [
        'user_id',
        'doc_employee',
        'doc_employee_status',
        'doc_employee_status_updated_at',
        'doc_self_employed',
        'doc_self_employed_status',
        'doc_self_employed_status_updated_at',
        'doc_retired',
        'doc_retired_status',
        'doc_retired_status_updated_at',
        'doc_students',
        'doc_students_status',
        'doc_students_status_updated_at',
    ];

}
