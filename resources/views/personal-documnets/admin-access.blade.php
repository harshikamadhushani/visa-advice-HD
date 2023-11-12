@extends('layouts.admin-app')
@section('title')
    Personal Documentations
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
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Documents</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Action</th>
                                    </tr>
                                </thead>
                                @foreach ($user as $data)
                                    <form method="POST" action="{{ route('updateStatus', $data->user_id) }}">
                                        @csrf
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Current Passports and Previous Passport
                                                                <span class="text-danger">*</span>
                                                            </h6>
                                                            <p class="text-xs text-secondary mb-0">jpeg</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                @if ($data->doc_current_or_previous_passport !== null)
                                                    <td>
                                                        <div class="text-uppercase d-flex px-2 py-1">
                                                            {{ $data->doc_current_or_previous_passport_status }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div
                                                        class="mb-1 px-2 py-1 @if ($data->doc_currently_live_status == 'rejected') d-none @endif">
                                                            <a href="{{ URL::asset('/build/personal_documents/'.$data->doc_current_or_previous_passport) }}" download><button type="button"
                                                                class="btn bg-gradient-primary text-white">Download</button></a>
                                                            <button type='submit'
                                                                class="btn bg-gradient-danger text-white"
                                                                name='current_passport_reject'>Reject</button>
                                                            <button type='submit'
                                                                class="btn bg-gradient-success text-white"
                                                                name='current_passport_accept'>Accept</button>
                                                        </div>
                                                    </td>
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Documents showing where you live
                                                                currently
                                                                <span class="text-danger">*</span>
                                                            </h6>
                                                            <p class="text-xs text-secondary mb-0"> Property deed or tenancy
                                                                agreement is required for the visa application.</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                @if ($data->doc_currently_live !== null)
                                                    <td>
                                                        <div class="text-uppercase d-flex px-2 py-1">
                                                            {{ $data->doc_currently_live_status }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div
                                                            class="mb-1 px-2 py-1 @if ($data->doc_currently_live_status == 'rejected') d-none @endif">
                                                            <a href="{{ URL::asset('/build/personal_documents/'.$data->doc_currently_live) }}" download>
                                                                <button type="button" class="btn bg-gradient-primary text-white">Download</button>
                                                            </a>
                                                            <button class="btn bg-gradient-danger text-white" type='submit'
                                                                name='document_show_reject'>Reject</button>
                                                            <button class="btn bg-gradient-success text-white"
                                                                type='submit' name='document_show_accept'>Accept</button>
                                                        </div>
                                                    </td>
                                                @endif

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Birth Certificate with English
                                                                Translation
                                                                <span class="text-danger">*</span>
                                                            </h6>
                                                            <p class="text-xs text-secondary mb-0"></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                @if ($data->doc_birth_certificate !== null)
                                                    <td>
                                                        <div class="text-uppercase d-flex px-2 py-1">
                                                            {{ $data->doc_birth_certificate_status }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div
                                                            class="mb-1 px-2 py-1 @if ($data->doc_birth_certificate_status == 'rejected') d-none @endif">
                                                            <a href="{{ URL::asset('/build/personal_documents/'.$data->doc_birth_certificate) }}" download> <button class="btn bg-gradient-primary text-white"
                                                                type="button" class="btn bg-primary">Download</button></a>
                                                            <button class="btn bg-gradient-danger text-white " type='submit'
                                                                name='birth_cetificate_reject'>Reject</button>
                                                            <button class="btn bg-gradient-success text-white "
                                                                type='submit'
                                                                name='birth_cetificate_accept'>Accept</button>
                                                        </div>
                                                    </td>
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Marriage certificate/other with English
                                                                Translation</h6>
                                                            <p class="text-xs text-secondary mb-0">michael@creative-tim.com
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                @if ($data->doc_marriage_certificate !== null)
                                                    <td>
                                                        <div class="text-uppercase d-flex px-2 py-1">
                                                            {{ $data->doc_marriage_certificate_status }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div
                                                            class="mb-1 px-2 py-1 @if ($data->doc_marriage_certificate_status == 'rejected') d-none @endif">
                                                            <a href="{{ URL::asset('/build/personal_documents/'.$data->doc_marriage_certificate) }}" download><button type="button"
                                                                class="btn bg-gradient-primary text-white">Download</button></a>
                                                            <button class="btn bg-gradient-danger text-white " type='submit'
                                                                name='marriage_certicate_reject'>Reject</button>
                                                            <button class="btn bg-gradient-success text-white "
                                                                type='submit'
                                                                name='marriage_certicate_accept'>Accept</button>
                                                        </div>

                                                    </td>
                                                @endif

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Birth Certificates of children with
                                                                English
                                                                Translation</h6>
                                                            <p class="text-xs text-secondary mb-0"></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                @if ($data->doc_birth_certificate_children !== null)
                                                    <td>
                                                        <div class="text-uppercase d-flex px-2 py-1">
                                                            {{ $data->doc_birth_certificate_children_status}}
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div
                                                            class="mb-1 px-2 py-1 @if ($data->doc_birth_certificate_children_status == 'rejected') d-none @endif">
                                                            <a href="{{ URL::asset('/build/personal_documents/'.$data->doc_birth_certificate_children) }}" download><button type="button"
                                                                class="btn bg-gradient-primary text-white">Download</button></a>
                                                            <button class="btn bg-gradient-danger text-white " type='submit'
                                                                name='birth_certificate_children_reject'>Reject</button>
                                                            <button type='submit'
                                                                class="btn bg-gradient-success text-white "
                                                                name='birth_certificate_children_accept'>Accept</button>
                                                        </div>
                                                    </td>
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Details of previous visa refusals </h6>
                                                            <p class="text-xs text-secondary mb-0">(If any)</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                @if ($data->doc_birth_certificate_children !== null)
                                                    <td>
                                                        <div class="text-uppercase d-flex px-2 py-1">
                                                            {{ $data->doc_birth_certificate_children_status }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div
                                                            class="mb-1 px-2 py-1 @if ($data->doc_birth_certificate_children_status == 'rejected') d-none @endif">
                                                            <a href="{{ URL::asset('/build/personal_documents/'.$data->doc_birth_certificate_children) }}" download><button type="button"
                                                                class="btn bg-gradient-primary text-white">Download</button></a>
                                                            <button class="btn bg-gradient-danger text-white " type='submit'
                                                                name='visa_refusals_reject'
                                                                class=' bg-gradient-danger'>Reject</button>
                                                            <button class="btn bg-gradient-success text-white " type='submit'
                                                                name='visa_refusals_accept'>Accept</button>
                                                        </div>
                                                    </td>
                                                @endif
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Proof of COVID-19 Vaccination </h6>
                                                            <p class="text-xs text-secondary mb-0">(Not mandatory)</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                @if ($data->doc_vaccination_proof !== null)
                                                    <td>
                                                        <div class="text-uppercase d-flex px-2 py-1">
                                                            {{ $data->doc_vaccination_proof_status}}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div
                                                            class="mb-1 px-2 py-1 @if ($data->doc_vaccination_proof_status == 'rejected') d-none @endif">
                                                            <a href="{{ URL::asset('/build/personal_documents/'.$data->doc_vaccination_proof) }}" download><button type="button"
                                                                class="btn bg-gradient-primary text-white">Download</button></a>
                                                            <button class="btn bg-gradient-danger text-white " type='submit'
                                                                name='vaccination_reject'>Reject</button>
                                                            <button class="btn bg-gradient-success text-white "
                                                                type='submit' name='vaccination_accept'>Accept</button>
                                                        </div>
                                                    </td>
                                                @endif
                                            </tr>
                                        </tbody>
                                    </form>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
