@extends('layouts.app')

@section('title')
    Personal Documentations
@endsection

@section('css')

<style>
    .cus-submit-btn{
        margin-top: 15px;
        margin-left: 10px;
    }

    .text-danger {
       color: red;
      font-weight: bold;
      }
</style>

@endsection

@section('content')
<h3 style="margin-left: 3%;">Personal Documentations</h3>
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
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Documents</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Upload</th>
                    @if(!empty($personal_document))
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    @endif
                  </tr>

                </thead>
                @if(empty($personal_document))
                <form  method="post" action="{{ route('personal.documents.store') }}" enctype="multipart/form-data">
                    @csrf
                @else
                <form method="POST" action="{{ route('personal.documents.update', $personal_document->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                @endif

                <tbody>

                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>

                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Current Passports and Previous Passport <span class="text-danger">*</span></h6>
                          <p class="text-xs text-secondary mb-0">jpeg</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">
                        <div class="mb-3">
                        <input class="form-control" type="file" name="current_or_previous_passport" id="formFile" @if(!empty($personal_document) && ($personal_document->doc_current_or_previous_passport_status == 'pending' || $personal_document->doc_current_or_previous_passport_status == 'verified') ) disabled @endif>
                        </div>
                      </p>

                    </td>
                    @if(!empty($personal_document))

                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm
                        @if($personal_document->doc_current_or_previous_passport_status == 'verified')
                                            bg-gradient-success
                        @elseif($personal_document->doc_current_or_previous_passport_status == 'rejected')
                                                bg-gradient-danger
                        @elseif($personal_document->doc_current_or_previous_passport_status == 'pending')
                                                bg-gradient-warning
                        @else
                                                bg-gradient-secondary
                        @endif
                      ">{{ $personal_document->doc_current_or_previous_passport_status }}</span>
                    </td>
                    @endif
                  </tr>

                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>

                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Documents showing where you live currently <span class="text-danger">*</span></h6>
                          <p class="text-xs text-secondary mb-0"> Property deed or tenancy agreement is required for the visa application.</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="currently_live" @if(!empty($personal_document) && ($personal_document->doc_currently_live_status == 'pending' || $personal_document->doc_currently_live_status == 'verified')) disabled @endif>
                        </div></p>



                        @if(!empty($personal_document))

                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm


                       @if($personal_document->doc_currently_live_status == 'verified')
                          bg-gradient-success
                         @elseif($personal_document->doc_currently_live_status == 'rejected')
                            bg-gradient-danger
                         @elseif($personal_document->doc_currently_live_status == 'pending')
                            bg-gradient-warning
                         @else
                            bg-gradient-secondary
                        @endif



                          ">{{ $personal_document->doc_currently_live_status }}</span>
                        </td>
                        @endif
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>

                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Birth Certificate with English Translation <span class="text-danger">*</span></h6>
                          <p class="text-xs text-secondary mb-0"></p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="birth_certificate"  @if(!empty($personal_document) && ($personal_document->doc_birth_certificate_status == 'pending' || $personal_document->doc_birth_certificate_status == 'verified')) disabled @endif>
                        </div></p>
                    </td>


                    @if(!empty($personal_document))

                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm

                      @if($personal_document->doc_birth_certificate_status == 'verified')
                      bg-gradient-success
                        @elseif($personal_document->doc_birth_certificate_status == 'rejected')
                                                bg-gradient-danger
                        @elseif($personal_document->doc_birth_certificate_status == 'pending')
                                                bg-gradient-warning
                        @else
                                                bg-gradient-secondary
                        @endif
                      ">{{ $personal_document->doc_birth_certificate_status }}</span>
                    </td>
                    @endif
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Marriage certificate/other with English Translation</h6>
                          <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="marriage_certificate"  @if(!empty($personal_document) && ($personal_document->doc_marriage_certificate_status == 'pending' || $personal_document->doc_marriage_certificate_status == 'verified')) disabled @endif>
                        </div></p>
                    </td>


                    @if(!empty($personal_document))

                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm


                      @if($personal_document->doc_marriage_certificate_status == 'verified')
                      bg-gradient-success
                        @elseif($personal_document->doc_marriage_certificate_status == 'rejected')
                                                bg-gradient-danger
                        @elseif($personal_document->doc_marriage_certificate_status == 'pending')
                                                bg-gradient-warning
                        @else
                                                bg-gradient-secondary
                        @endif
                      ">{{ $personal_document->doc_marriage_certificate_status }}</span>
                    </td>

                    @endif

                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>

                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Birth Certificates of children with English Translation</h6>
                          <p class="text-xs text-secondary mb-0"></p>
                        </div>
                      </div>
                    </td>

                    <td>
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="birth_certificate_children" @if(!empty($personal_document) && ($personal_document->doc_birth_certificate_children_status == 'pending' || $personal_document->doc_birth_certificate_children_status == 'verified')) disabled @endif>
                        </div></p>
                    </td>


                    @if(!empty($personal_document))

                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm


                      @if($personal_document->doc_birth_certificate_children_status == 'verified')
                      bg-gradient-success
                        @elseif($personal_document->doc_birth_certificate_children_status == 'rejected')
                                                bg-gradient-danger
                        @elseif($personal_document->doc_birth_certificate_children_status == 'pending')
                                                bg-gradient-warning
                        @else
                                                bg-gradient-secondary
                        @endif


                      ">{{ $personal_document->doc_birth_certificate_children_status }}</span>
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>

                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Details of previous visa refusals </h6>
                          <p class="text-xs text-secondary mb-0">(If any)</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="previous_visa_refusals" @if(!empty($personal_document) && ($personal_document->doc_previous_visa_refusals_status == 'pending' || $personal_document->doc_previous_visa_refusals_status == 'verified')) disabled @endif>
                        </div></p>
                    </td>


                    @if(!empty($personal_document))

                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm

                      @if($personal_document->doc_birth_certificate_children_status == 'verified')
                      bg-gradient-success
                        @elseif($personal_document->doc_birth_certificate_children_status == 'rejected')
                                                bg-gradient-danger
                        @elseif($personal_document->doc_previous_visa_refusals_status == 'pending')
                                                bg-gradient-warning
                        @else
                                                bg-gradient-secondary
                        @endif
                      ">{{ $personal_document->doc_previous_visa_refusals_status }}</span>
                    </td>
                    @endif

                  </tr>

                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Proof of COVID-19 Vaccination </h6>
                          <p class="text-xs text-secondary mb-0">(Not mandatory)</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="vaccination_proof" @if(!empty($personal_document) && ($personal_document->doc_vaccination_proof_status == 'pending' || $personal_document->doc_vaccination_proof_status == 'verified')) disabled @endif>
                        </div></p>
                    </td>


                    @if(!empty($personal_document))

                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm
                      bg-gradient-success


                      @if($personal_document->doc_vaccination_proof_status == 'verified')
                      bg-gradient-success
                    @elseif($personal_document->doc_vaccination_proof_status == 'rejected')
                                            bg-gradient-danger
                    @elseif($personal_document->doc_vaccination_proof_status == 'pending')
                                            bg-gradient-warning
                    @else
                                            bg-gradient-secondary
                    @endif
                      ">{{ $personal_document->doc_vaccination_proof_status }}</span>
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
