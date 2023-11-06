@extends('layouts.app')

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

            @if (empty($sponsor_visit))
            <form method="post" action="{{ route('sponsor.visit.documents.store') }}"
                enctype="multipart/form-data">
                @csrf
            @else
                    <form method="POST"
                        action="{{ route('sponsor.visit.documents.update', $sponsor_visit->id) }}"
                        enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
            @endif

            <div class="table-responsive p-0">
                @include('../layouts/alert')
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Documents</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Upload</th>
                    @if (!empty($sponsor_visit))
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
                          <h6 class="mb-0 text-sm">Sponsor Invitation Letter</h6>
                          <p class="text-xs text-secondary mb-0">PDF</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">
                        <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="invitation_letter" @if(!empty($sponsor_visit) && ($sponsor_visit->doc_invitation_letter_status == 'pending' || $sponsor_visit->doc_invitation_letter_status == 'verified') ) disabled @endif>
                        </div>
                      </p>

                    </td>
                    @if (!empty($sponsor_visit))
                    <td class="align-middle text-center text-sm">
                        <span
                            class="badge badge-sm
                            @if ($sponsor_visit->doc_invitation_letter_status == 'verified') bg-gradient-success
                            @elseif($sponsor_visit->doc_invitation_letter_status == 'rejected') bg-gradient-danger
                            @elseif($sponsor_visit->doc_invitation_letter_status == 'pending') bg-gradient-warning
                            @else bg-gradient-secondary @endif ">{{ $sponsor_visit->doc_invitation_letter_status }}
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
                          <h6 class="mb-0 text-sm">Sponsors Residence Permit</h6>
                          <p class="text-xs text-secondary mb-0"> If Unavailable : Passport Confirming Imigration Status </p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="residence_permit" @if(!empty($sponsor_visit) && ($sponsor_visit->doc_residence_permit_status == 'pending' || $sponsor_visit->doc_residence_permit_status == 'verified') ) disabled @endif>
                        </div></p>

                    </td>
                    @if (!empty($sponsor_visit))
                    <td class="align-middle text-center text-sm">
                        <span
                            class="badge badge-sm
                            @if ($sponsor_visit->doc_residence_permit_status == 'verified') bg-gradient-success
                            @elseif($sponsor_visit->doc_residence_permit_status == 'rejected') bg-gradient-danger
                            @elseif($sponsor_visit->doc_residence_permit_status == 'pending') bg-gradient-warning
                            @else bg-gradient-secondary @endif ">{{ $sponsor_visit->doc_residence_permit_status }}
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
                          <h6 class="mb-0 text-sm">Evidence of Available Accomadation</h6>
                          <p class="text-xs text-secondary mb-0">Deed/Tenancy Agreement/Mortgage Statement/other</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="evidence_of_available_accommodation" @if(!empty($sponsor_visit) && ($sponsor_visit->doc_evidence_of_available_accommodation_status == 'pending' || $sponsor_visit->doc_evidence_of_available_accommodation_status == 'verified') ) disabled @endif>
                        </div></p>

                    </td>
                    @if (!empty($sponsor_visit))
                    <td class="align-middle text-center text-sm">
                        <span
                            class="badge badge-sm
                            @if ($sponsor_visit->doc_evidence_of_available_accommodation_status == 'verified') bg-gradient-success
                            @elseif($sponsor_visit->doc_evidence_of_available_accommodation_status == 'rejected') bg-gradient-danger
                            @elseif($sponsor_visit->doc_evidence_of_available_accommodation_status == 'pending') bg-gradient-warning
                            @else bg-gradient-secondary @endif ">{{ $sponsor_visit->doc_evidence_of_available_accommodation_status }}
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
                          <h6 class="mb-0 text-sm">Financial Statement of Host</h6>
                          <p class="text-xs text-secondary mb-0">Only if your host is financially funding you</p>
                        </div>
                      </div>
                    </td>

                    <td>
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="financial_statement_of_host" @if(!empty($sponsor_visit) && ($sponsor_visit->doc_financial_statement_of_host_status == 'pending' || $sponsor_visit->doc_financial_statement_of_host_status == 'verified') ) disabled @endif>
                        </div></p>
                    </td>

                    @if (!empty($sponsor_visit))
                    <td class="align-middle text-center text-sm">
                        <span
                            class="badge badge-sm
                            @if ($sponsor_visit->doc_financial_statement_of_host_status == 'verified') bg-gradient-success
                            @elseif($sponsor_visit->doc_financial_statement_of_host_status == 'rejected') bg-gradient-danger
                            @elseif($sponsor_visit->doc_financial_statement_of_host_status == 'pending') bg-gradient-warning
                            @else bg-gradient-secondary @endif ">{{ $sponsor_visit->doc_financial_statement_of_host_status }}
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
                          <h6 class="mb-0 text-sm">Accountant Letter & Tax Records (For 3 Years)</h6>
                          <p class="text-xs text-secondary mb-0">If Self Employed</p>
                        </div>
                      </div>
                    </td>


                    <td>
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="accountant_letter_and_tax_records" @if(!empty($sponsor_visit) && ($sponsor_visit->doc_accountant_letter_and_tax_records_status == 'pending' || $sponsor_visit->doc_accountant_letter_and_tax_records_status == 'verified') ) disabled @endif>
                        </div></p>
                    </td>

                    @if (!empty($sponsor_visit))
                    <td class="align-middle text-center text-sm">
                        <span
                            class="badge badge-sm
                            @if ($sponsor_visit->doc_accountant_letter_and_tax_records_status == 'verified') bg-gradient-success
                            @elseif($sponsor_visit->doc_accountant_letter_and_tax_records_status == 'rejected') bg-gradient-danger
                            @elseif($sponsor_visit->doc_accountant_letter_and_tax_records_status == 'pending') bg-gradient-warning
                            @else bg-gradient-secondary @endif ">{{ $sponsor_visit->doc_accountant_letter_and_tax_records_status }}
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
                          <h6 class="mb-0 text-sm">Hosts Birth Certificate/ Marriage Certificate </h6>
                          <p class="text-xs text-secondary mb-0">Evidence to show how you are related with host</p>
                        </div>
                      </div>
                    </td>

                    <td>
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="birth_or_marriage_certificate" @if(!empty($sponsor_visit) && ($sponsor_visit->doc_birth_or_marriage_certificate_status == 'pending' || $sponsor_visit->doc_birth_or_marriage_certificate_status == 'verified') ) disabled @endif>
                        </div></p>
                    </td>

                    @if (!empty($sponsor_visit))
                    <td class="align-middle text-center text-sm">
                        <span
                            class="badge badge-sm
                            @if ($sponsor_visit->doc_birth_or_marriage_certificate_status == 'verified') bg-gradient-success
                            @elseif($sponsor_visit->doc_birth_or_marriage_certificate_status == 'rejected') bg-gradient-danger
                            @elseif($sponsor_visit->doc_birth_or_marriage_certificate_status == 'pending') bg-gradient-warning
                            @else bg-gradient-secondary @endif ">{{ $sponsor_visit->doc_birth_or_marriage_certificate_status }}
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
