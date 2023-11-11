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
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Upload</th>
                                    </tr>
                                </thead>
                                @foreach ($user as $data)
                                    <form method="POST" action="{{ route('updateStatus', $data->user_id) }}">
                                        @csrf
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>

                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Current Passports and Previous Passport
                                                                <span class="text-danger">*</span>
                                                            </h6>
                                                            <p class="text-xs text-secondary mb-0">jpeg</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn bg-gradient-primary text-white" >Download</button>
                                                    <button type='submit' class="btn bg-gradient-danger text-white" name='current_passport_reject'>Reject</button>
                                                    <button type='submit' class="btn bg-gradient-success text-white" name='current_passport_accept'>Accept</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>

                                                        </div>
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
                                                <td>
                                                    <button  class="btn bg-gradient-primary text-white">Download</button>
                                                    <button  class="btn bg-gradient-danger text-white" type='submit' name='document_show_reject'>Reject</button>
                                                    <button  class="btn bg-gradient-success text-white" type='submit' name='document_show_accept'>Accept</button>
                                                </td>


                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>

                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Birth Certificate with English
                                                                Translation
                                                                <span class="text-danger">*</span>
                                                            </h6>
                                                            <p class="text-xs text-secondary mb-0"></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button  class="btn bg-gradient-primary text-white" type="button" class="btn bg-primary">Download</button>
                                                    <button  class="btn bg-gradient-danger text-white" type='submit' name='birth_cetificate_reject'>Reject</button>
                                                    <button  class="btn bg-gradient-success text-white" type='submit' name='birth_cetificate_accept'>Accept</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Marriage certificate/other with English
                                                                Translation</h6>
                                                            <p class="text-xs text-secondary mb-0">michael@creative-tim.com
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button  class="btn bg-gradient-primary text-white">Download</button>
                                                    <button  class="btn bg-gradient-danger text-white"  type='submit' name='marriage_certicate_reject'>Reject</button>
                                                    <button  class="btn bg-gradient-success text-white" type='submit' name='marriage_certicate_accept'>Accept</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>

                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Birth Certificates of children with
                                                                English
                                                                Translation</h6>
                                                            <p class="text-xs text-secondary mb-0"></p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <button  class="btn bg-gradient-primary text-white">Download</button>
                                                    <button  class="btn bg-gradient-danger text-white" type='submit' name='birth_certificate_children_reject'>Reject</button>
                                                    <button type='submit'  class="btn bg-gradient-success text-white"
                                                        name='birth_certificate_children_accept'>Accept</button>
                                                </td>



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
                                                    <button  class="btn bg-gradient-primary text-white">Download</button>
                                                    <button  class="btn bg-gradient-danger text-white"type='submit' name='visa_refusals_reject' class=' bg-gradient-danger'>Reject</button>
                                                    <button  class="btn bg-gradient-success text-white"type='submit' name='visa_refusals_accept'>Accept</button>
                                                </td>

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
                                                    <button  class="btn bg-gradient-primary text-white">Download</button>
                                                    <button   class="btn bg-gradient-danger text-white"type='submit' name='vaccination_reject'>Reject</button>
                                                    <button  class="btn bg-gradient-success text-white" type='submit' name='vaccination_accept'>Accept</button>
                                                </td>
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
