@extends('layouts.app')

@section('title')
    Employment Decouments
@endsection

@section('css')
    <style>
        .cus-submit-btn {
            margin-top: 15px;
            margin-left: 10px;
        }
    </style>
@endsection

@section('content')
<h3 style="margin-left: 3%;">Employment Documentations</h3>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Required Documents</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        @if (empty($employment_document))
                            <form method="post" action="{{ route('employment.documents.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                            @else
                                <form method="POST"
                                    action="{{ route('employment.documents.update', $employment_document->id) }}"
                                    enctype="multipart/form-data">

                                    @csrf
                                    @method('PUT')
                        @endif

                        <div class="table-responsive p-0">
                            @include('../layouts/alert')
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Documents</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Upload</th>
                                        <th
                                        @if (!empty($employment_document))
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Status
                                            </th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>

                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Employee</h6>
                                                    <p class="text-xs text-secondary mb-0">letter from employer stating the
                                                        date of commencement of employment<br>
                                                        and confirming period of approved paid/unpaid leave, <br>salary
                                                        slips for the last 6 months, and bank statements to evidence salary
                                                        credits</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                            <div class="mb-3">
                                                <input class="form-control" type="file" id="formFile" name="employee" @if(!empty($employment_document) && ($employment_document->doc_employee_status == 'pending' || $employment_document->doc_employee_status == 'verified') ) disabled @endif>
                                            </div>
                                            </p>

                                        </td>
                                        @if (!empty($employment_document))
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge badge-sm
                                                    @if ($employment_document->doc_employee_status == 'verified') bg-gradient-success
                                                    @elseif($employment_document->doc_employee_status == 'rejected') bg-gradient-danger
                                                    @elseif($employment_document->doc_employee_status == 'pending') bg-gradient-warning
                                                    @else bg-gradient-secondary @endif ">{{ $employment_document->doc_employee_status }}
                                                </span>
                                            </td>
                                        @endif


                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>

                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Self - Employed</h6>
                                                    <p class="text-xs text-secondary mb-0"> Business registration copies,
                                                        company bank statements for the last six months,<br> return of
                                                        income, audited accounts, insurance policies for business,<br>
                                                        business location details, licenses/permits, etc.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                            <div class="mb-3">
                                                <input class="form-control" type="file" id="formFile" name="self_employed" @if(!empty($employment_document) && ($employment_document->doc_self_employed_status == 'pending' || $employment_document->doc_self_employed_status == 'verified') ) disabled @endif>
                                            </div>
                                            </p>

                                        </td>
                                        @if (!empty($employment_document))
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge badge-sm
                                                    @if ($employment_document->doc_self_employed_status == 'verified') bg-gradient-success
                                                    @elseif($employment_document->doc_self_employed_status == 'rejected') bg-gradient-danger
                                                    @elseif($employment_document->doc_self_employed_status == 'pending') bg-gradient-warning
                                                    @else bg-gradient-secondary @endif ">{{ $employment_document->doc_self_employed_status }}
                                                </span>
                                            </td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>

                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">If Retired </h6>
                                                    <p class="text-xs text-secondary mb-0">Pension Identity Card and bank
                                                        statements showing the pension payments</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                            <div class="mb-3">
                                                <input class="form-control" type="file" id="formFile" name="retired" @if(!empty($employment_document) && ($employment_document->doc_retired_status == 'pending' || $employment_document->doc_retired_status == 'verified') ) disabled @endif>
                                            </div>
                                            </p>

                                        </td>
                                        @if (!empty($employment_document))
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge badge-sm
                                                    @if ($employment_document->doc_retired_status == 'verified') bg-gradient-success
                                                    @elseif($employment_document->doc_retired_status == 'rejected') bg-gradient-danger
                                                    @elseif($employment_document->doc_retired_status == 'pending') bg-gradient-warning
                                                    @else bg-gradient-secondary @endif ">{{ $employment_document->doc_retired_status }}
                                                </span>
                                            </td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>

                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Students</h6>
                                                    <p class="text-xs text-secondary mb-0"> A letter from the education
                                                        provider, on headed paper, <br>confirming enrolment of current
                                                        studies, permitted leave.<br>Student Identity Card and
                                                        qualifications obtained to date.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                            <div class="mb-3">
                                                <input class="form-control" type="file" id="formFile" name="students" @if(!empty($employment_document) && ($employment_document->doc_students_status == 'pending' || $employment_document->doc_students_status == 'verified') ) disabled @endif>
                                            </div>
                                            </p>
                                        </td>
                                        @if (!empty($employment_document))
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge badge-sm
                                                    @if ($employment_document->doc_students_status == 'verified') bg-gradient-success
                                                    @elseif($employment_document->doc_students_status == 'rejected') bg-gradient-danger
                                                    @elseif($employment_document->doc_students_status == 'pending') bg-gradient-warning
                                                    @else bg-gradient-secondary @endif ">{{ $employment_document->doc_students_status }}
                                                </span>
                                            </td>
                                        @endif

                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="cus-submit-btn">
                            <button class="btn btn-outline-primary btn-sm mb-0 me-3">Upload</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
