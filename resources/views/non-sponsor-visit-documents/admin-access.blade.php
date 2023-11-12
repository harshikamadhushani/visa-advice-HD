@extends('layouts.admin-app')

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

                            <div class="table-responsive p-0">
                                @include('../layouts/alert')
                                <table class="table align-items-center mb-0">
                                    <thead>
                                      <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Documents</th>
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
                                              <h6 class="mb-0 text-sm">Receipt of Hotel Reservation</h6>
                                              <p class="text-xs text-secondary mb-0"></p>
                                            </div>
                                          </div>
                                        </td>
                                        @if (!empty($data->doc_receipt_of_hotel_reservation))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_receipt_of_hotel_reservation_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-1 px-2 py-1 @if ($data->doc_receipt_of_hotel_reservation_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/non_sponsor_visit/' . $data->doc_receipt_of_hotel_reservation) }}"
                                                    download><button type="button"
                                                        class="btn bg-gradient-primary text-white">Download</button></a>
                                                <a
                                                    href="{{ route('updateNonSponsorStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_receipt_of_hotel_reservation']) }}">
                                                    <button type='submit'
                                                        class="btn bg-gradient-danger text-white">Reject</button>
                                                </a>
                                                <a
                                                    href="{{ route('updateNonSponsorStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_receipt_of_hotel_reservation']) }}">
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
                                              <h6 class="mb-0 text-sm">Evidence of Sufficient Funds</h6>
                                              <p class="text-xs text-secondary mb-0"> </p>
                                            </div>
                                          </div>
                                        </td>
                                        @if (!empty($data->doc_evidence_of_sufficient_funds))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_evidence_of_sufficient_funds_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-1 px-2 py-1 @if ($data->doc_evidence_of_sufficient_funds_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/non_sponsor_visit/' . $data->doc_evidence_of_sufficient_funds) }}"
                                                    download><button type="button"
                                                        class="btn bg-gradient-primary text-white">Download</button></a>
                                                <a
                                                    href="{{ route('updateNonSponsorStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_evidence_of_sufficient_funds']) }}">
                                                    <button type='submit'
                                                        class="btn bg-gradient-danger text-white">Reject</button>
                                                </a>
                                                <a
                                                    href="{{ route('updateNonSponsorStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_evidence_of_sufficient_funds']) }}">
                                                    <button type='submit'
                                                        class="btn bg-gradient-success text-white">Accept</button>
                                                </a>
                                            </div>
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
                                        @if (!empty($data->doc_travel_itinerary))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_travel_itinerary_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-1 px-2 py-1 @if ($data->doc_travel_itinerary_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/non_sponsor_visit/' . $data->doc_travel_itinerary) }}"
                                                    download><button type="button"
                                                        class="btn bg-gradient-primary text-white">Download</button></a>
                                                <a
                                                    href="{{ route('updateNonSponsorStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_travel_itinerary']) }}">
                                                    <button type='submit'
                                                        class="btn bg-gradient-danger text-white">Reject</button>
                                                </a>
                                                <a
                                                    href="{{ route('updateNonSponsorStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_travel_itinerary']) }}">
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
                                              <h6 class="mb-0 text-sm">Life Insurance</h6>
                                              <p class="text-xs text-secondary mb-0"></p>
                                            </div>
                                          </div>
                                        </td>
                                        @if (!empty($data->doc_life_insurance))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_life_insurance_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-1 px-2 py-1 @if ($data->doc_life_insurance_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/non_sponsor_visit/' . $data->doc_life_insurance) }}"
                                                    download><button type="button"
                                                        class="btn bg-gradient-primary text-white">Download</button></a>
                                                <a
                                                    href="{{ route('updateNonSponsorStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_life_insurance']) }}">
                                                    <button type='submit'
                                                        class="btn bg-gradient-danger text-white">Reject</button>
                                                </a>
                                                <a
                                                    href="{{ route('updateNonSponsorStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_life_insurance']) }}">
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
