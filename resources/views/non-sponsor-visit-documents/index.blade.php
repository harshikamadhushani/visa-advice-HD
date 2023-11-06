@extends('layouts.app')

@section('title')
    Non Sponsor Visit Documentations
@endsection

@section('css')
    <style>
        .cus-submit-btn {
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
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Required Documents</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        @if (empty($non_sponsor_visit))
                        <form method="post" action="{{ route('non.sponsor.visit.documents.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            @else
                        <form method="POST"
                        action="{{ route('non.sponsor.visit.documents.update', $non_sponsor_visit->id) }}"
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
                                        @if (!empty($non_sponsor_visit))
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
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
                                              <h6 class="mb-0 text-sm">Receipt of Hotel Reservation</h6>
                                              <p class="text-xs text-secondary mb-0"></p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <p class="text-xs font-weight-bold mb-0">
                                            <div class="mb-3">
                                            <input class="form-control" type="file" id="formFile" name="receipt_of_hotel_reservation" @if(!empty($non_sponsor_visit) && ($non_sponsor_visit->doc_receipt_of_hotel_reservation_status == 'pending' || $non_sponsor_visit->doc_receipt_of_hotel_reservation_status == 'verified')) disabled @endif>
                                            </div>
                                          </p>

                                        </td>
                                        @if (!empty($non_sponsor_visit))
                                        <td class="align-middle text-center text-sm">
                                            <span
                                                class="badge badge-sm
                                                @if ($non_sponsor_visit->doc_receipt_of_hotel_reservation_status == 'verified') bg-gradient-success
                                                @elseif($non_sponsor_visit->doc_receipt_of_hotel_reservation_status == 'rejected') bg-gradient-danger
                                                @elseif($non_sponsor_visit->doc_receipt_of_hotel_reservation_status == 'pending') bg-gradient-warning
                                                @else bg-gradient-secondary @endif ">{{ $non_sponsor_visit->doc_receipt_of_hotel_reservation_status }}
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
                                              <h6 class="mb-0 text-sm">Evidence of Sufficient Funds</h6>
                                              <p class="text-xs text-secondary mb-0"> </p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                                            <input class="form-control" type="file" id="formFile" name="evidence_of_sufficient_funds" @if(!empty($non_sponsor_visit) && ($non_sponsor_visit->doc_evidence_of_sufficient_funds_status == 'pending' || $non_sponsor_visit->doc_evidence_of_sufficient_funds_status == 'verified')) disabled @endif>
                                            </div></p>

                                        </td>
                                        @if (!empty($non_sponsor_visit))
                                        <td class="align-middle text-center text-sm">
                                            <span
                                                class="badge badge-sm
                                                @if ($non_sponsor_visit->doc_evidence_of_sufficient_funds_status == 'verified') bg-gradient-success
                                                @elseif($non_sponsor_visit->doc_evidence_of_sufficient_funds_status == 'rejected') bg-gradient-danger
                                                @elseif($non_sponsor_visit->doc_evidence_of_sufficient_funds_status == 'pending') bg-gradient-warning
                                                @else bg-gradient-secondary @endif ">{{ $non_sponsor_visit->doc_evidence_of_sufficient_funds_status }}
                                            </span>
                                        </td>
                                        @endif


                                        </td>

                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="d-flex px-2 py-1">
                                            <div>

                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                              <h6 class="mb-0 text-sm">Travel itinerary
                                              </h6>
                                              <p class="text-xs text-secondary mb-0"></p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                                            <input class="form-control" type="file" id="formFile" name="travel_itinerary" @if(!empty($non_sponsor_visit) && ($non_sponsor_visit->doc_travel_itinerary_status == 'pending' || $non_sponsor_visit->doc_travel_itinerary_status == 'verified')) disabled @endif>
                                            </div></p>

                                        </td>
                                        @if (!empty($non_sponsor_visit))
                                        <td class="align-middle text-center text-sm">
                                            <span
                                                class="badge badge-sm
                                                @if ($non_sponsor_visit->doc_travel_itinerary_status == 'verified') bg-gradient-success
                                                @elseif($non_sponsor_visit->doc_travel_itinerary_status == 'rejected') bg-gradient-danger
                                                @elseif($non_sponsor_visit->doc_travel_itinerary_status == 'pending') bg-gradient-warning
                                                @else bg-gradient-secondary @endif ">{{ $non_sponsor_visit->doc_travel_itinerary_status }}
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
                                              <h6 class="mb-0 text-sm">Life Insurance</h6>
                                              <p class="text-xs text-secondary mb-0"></p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                                            <input class="form-control" type="file" id="formFile" name="life_insurance" @if(!empty($non_sponsor_visit) && ($non_sponsor_visit->doc_life_insurance_status == 'pending' || $non_sponsor_visit->doc_life_insurance_status == 'verified') ) disabled @endif>
                                            </div></p>
                                        </td>
                                        @if (!empty($non_sponsor_visit))
                                        <td class="align-middle text-center text-sm">
                                            <span
                                                class="badge badge-sm
                                                @if ($non_sponsor_visit->doc_life_insurance_status == 'verified') bg-gradient-success
                                                @elseif($non_sponsor_visit->doc_life_insurance_status == 'rejected') bg-gradient-danger
                                                @elseif($non_sponsor_visit->doc_life_insurance_status == 'pending') bg-gradient-warning
                                                @else bg-gradient-secondary @endif ">{{ $non_sponsor_visit->doc_life_insurance_status }}
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
