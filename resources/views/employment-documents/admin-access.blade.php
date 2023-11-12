@extends('layouts.admin-app')


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

                        <div class="table-responsive p-0">
                            @include('../layouts/alert')
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Documents</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Status</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Action</th>
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
                                        @if (!empty($data->doc_employee))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_employee_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                            class="mb-1 px-2 py-1 @if ($data->doc_employee_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/employment_documents/'.$data->doc_employee) }}" download><button type="button"
                                                    class="btn bg-gradient-primary text-white">Download</button></a>
                                                    <a href="{{ route('updateEmployeeStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_employee']) }}">
                                                        <button type='submit' class="btn bg-gradient-danger text-white">Reject</button>
                                                    </a>
                                                    <a href="{{ route('updateEmployeeStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_employee']) }}">
                                                        <button type='submit' class="btn bg-gradient-success text-white">Accept</button>
                                                    </a>

                                            </div>
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
                                        @if (!empty($data->doc_self_employed))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_self_employed_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                            class="mb-1 px-2 py-1 @if ($data->doc_self_employed_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/employment_documents/'.$data->doc_self_employed) }}" download><button type="button"
                                                    class="btn bg-gradient-primary text-white">Download</button></a>
                                                    <a href="{{ route('updateEmployeeStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_self_employed']) }}">
                                                        <button type='submit' class="btn bg-gradient-danger text-white">Reject</button>
                                                    </a>
                                                    <a href="{{ route('updateEmployeeStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_self_employed']) }}">
                                                        <button type='submit' class="btn bg-gradient-success text-white">Accept</button>
                                                    </a>

                                            </div>
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
                                        @if (!empty($data->doc_retired))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_retired_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                            class="mb-1 px-2 py-1 @if ($data->doc_retired_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/employment_documents/'.$data->doc_retired) }}" download><button type="button"
                                                    class="btn bg-gradient-primary text-white">Download</button></a>
                                                    <a href="{{ route('updateEmployeeStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_retired']) }}">
                                                        <button type='submit' class="btn bg-gradient-danger text-white">Reject</button>
                                                    </a>
                                                    <a href="{{ route('updateEmployeeStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_retired']) }}">
                                                        <button type='submit' class="btn bg-gradient-success text-white">Accept</button>
                                                    </a>

                                            </div>
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
                                        @if (!empty($data->doc_students))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_students_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                            class="mb-1 px-2 py-1 @if ($data->doc_students_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/employment_documents/'.$data->doc_students) }}" download><button type="button"
                                                    class="btn bg-gradient-primary text-white">Download</button></a>
                                                    <a href="{{ route('updateEmployeeStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_students']) }}">
                                                        <button type='submit' class="btn bg-gradient-danger text-white">Reject</button>
                                                    </a>
                                                    <a href="{{ route('updateEmployeeStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_students']) }}">
                                                        <button type='submit' class="btn bg-gradient-success text-white">Accept</button>
                                                    </a>

                                            </div>
                                        </td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
