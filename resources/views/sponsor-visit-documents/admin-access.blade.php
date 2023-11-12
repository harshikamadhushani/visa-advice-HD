@extends('layouts.admin-app')

@section('title')
    Sponsor Visit Documentations
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
    <h3 style="margin-left: 3%;">Sponser Documentations</h3>
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
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Sponsor Invitation Letter</h6>
                                                    <p class="text-xs text-secondary mb-0">PDF</p>
                                                </div>
                                            </div>
                                        </td>
                                        @if (!empty($data->doc_invitation_letter))
                                            <td>
                                                <div class="text-uppercase d-flex px-2 py-1">
                                                    {{ $data->doc_invitation_letter_status }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="mb-1 px-2 py-1 @if ($data->doc_invitation_letter_status == 'rejected') d-none @endif">
                                                    <a href="{{ URL::asset('/build/sponsor_visit/' . $data->doc_invitation_letter) }}"
                                                        download><button type="button"
                                                            class="btn bg-gradient-primary text-white">Download</button></a>
                                                    <a
                                                        href="{{ route('updateSponsorStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_invitation_letter']) }}">
                                                        <button type='submit'
                                                            class="btn bg-gradient-danger text-white">Reject</button>
                                                    </a>
                                                    <a
                                                        href="{{ route('updateSponsorStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_invitation_letter']) }}">
                                                        <button type='submit'
                                                            class="btn bg-gradient-success text-white">Accept</button>
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
                                                    <h6 class="mb-0 text-sm">Sponsors Residence Permit</h6>
                                                    <p class="text-xs text-secondary mb-0"> If Unavailable : Passport
                                                        Confirming Imigration Status </p>
                                                </div>
                                            </div>
                                        </td>
                                        @if (!empty($data->doc_residence_permit))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_residence_permit_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-1 px-2 py-1 @if ($data->doc_residence_permit_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/sponsor_visit/' . $data->doc_residence_permit) }}"
                                                    download><button type="button"
                                                        class="btn bg-gradient-primary text-white">Download</button></a>
                                                <a
                                                    href="{{ route('updateSponsorStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_residence_permit']) }}">
                                                    <button type='submit'
                                                        class="btn bg-gradient-danger text-white">Reject</button>
                                                </a>
                                                <a
                                                    href="{{ route('updateSponsorStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_residence_permit']) }}">
                                                    <button type='submit'
                                                        class="btn bg-gradient-success text-white">Accept</button>
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
                                                    <h6 class="mb-0 text-sm">Evidence of Available Accomadation</h6>
                                                    <p class="text-xs text-secondary mb-0">Deed/Tenancy Agreement/Mortgage
                                                        Statement/other</p>
                                                </div>
                                            </div>
                                        </td>

                                        @if (!empty($data->doc_evidence_of_available_accommodation))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_evidence_of_available_accommodation_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-1 px-2 py-1 @if ($data->doc_evidence_of_available_accommodation_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/sponsor_visit/' . $data->doc_evidence_of_available_accommodation) }}"
                                                    download><button type="button"
                                                        class="btn bg-gradient-primary text-white">Download</button></a>
                                                <a
                                                    href="{{ route('updateSponsorStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_evidence_of_available_accommodation']) }}">
                                                    <button type='submit'
                                                        class="btn bg-gradient-danger text-white">Reject</button>
                                                </a>
                                                <a
                                                    href="{{ route('updateSponsorStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_evidence_of_available_accommodation']) }}">
                                                    <button type='submit'
                                                        class="btn bg-gradient-success text-white">Accept</button>
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
                                                    <h6 class="mb-0 text-sm">Financial Statement of Host</h6>
                                                    <p class="text-xs text-secondary mb-0">Only if your host is financially
                                                        funding you</p>
                                                </div>
                                            </div>
                                        </td>
                                        @if (!empty($data->doc_financial_statement_of_host))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_financial_statement_of_host_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-1 px-2 py-1 @if ($data->doc_financial_statement_of_host_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/sponsor_visit/' . $data->doc_financial_statement_of_host) }}"
                                                    download><button type="button"
                                                        class="btn bg-gradient-primary text-white">Download</button></a>
                                                <a
                                                    href="{{ route('updateSponsorStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_financial_statement_of_host']) }}">
                                                    <button type='submit'
                                                        class="btn bg-gradient-danger text-white">Reject</button>
                                                </a>
                                                <a
                                                    href="{{ route('updateSponsorStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_financial_statement_of_host']) }}">
                                                    <button type='submit'
                                                        class="btn bg-gradient-success text-white">Accept</button>
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
                                                    <h6 class="mb-0 text-sm">Accountant Letter & Tax Records (For 3 Years)
                                                    </h6>
                                                    <p class="text-xs text-secondary mb-0">If Self Employed</p>
                                                </div>
                                            </div>
                                        </td>
                                        @if (!empty($data->doc_accountant_letter_and_tax_records))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_accountant_letter_and_tax_records_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-1 px-2 py-1 @if ($data->doc_accountant_letter_and_tax_records_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/sponsor_visit/' . $data->doc_accountant_letter_and_tax_records) }}"
                                                    download><button type="button"
                                                        class="btn bg-gradient-primary text-white">Download</button></a>
                                                <a
                                                    href="{{ route('updateSponsorStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_accountant_letter_and_tax_records']) }}">
                                                    <button type='submit'
                                                        class="btn bg-gradient-danger text-white">Reject</button>
                                                </a>
                                                <a
                                                    href="{{ route('updateSponsorStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_accountant_letter_and_tax_records']) }}">
                                                    <button type='submit'
                                                        class="btn bg-gradient-success text-white">Accept</button>
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
                                                    <h6 class="mb-0 text-sm">Hosts Birth Certificate/ Marriage Certificate
                                                    </h6>
                                                    <p class="text-xs text-secondary mb-0">Evidence to show how you are
                                                        related with host</p>
                                                </div>
                                            </div>
                                        </td>
                                        @if (!empty($data->doc_birth_or_marriage_certificate))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_birth_or_marriage_certificate_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-1 px-2 py-1 @if ($data->doc_birth_or_marriage_certificate_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/sponsor_visit/' . $data->doc_birth_or_marriage_certificate) }}"
                                                    download><button type="button"
                                                        class="btn bg-gradient-primary text-white">Download</button></a>
                                                <a
                                                    href="{{ route('updateSponsorStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_birth_or_marriage_certificate']) }}">
                                                    <button type='submit'
                                                        class="btn bg-gradient-danger text-white">Reject</button>
                                                </a>
                                                <a
                                                    href="{{ route('updateSponsorStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_birth_or_marriage_certificate']) }}">
                                                    <button type='submit'
                                                        class="btn bg-gradient-success text-white">Accept</button>
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
