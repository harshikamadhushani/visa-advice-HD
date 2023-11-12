@extends('layouts.admin-app')


@section('title')
    Financial Documents
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
<h3 style="margin-left: 3%;">Financial Documentations</h3>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Financial Background</h6>
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
                                                    <h6 class="mb-0 text-sm">Saving Accounts <span class="text-danger">*</span></h6>
                                                    <p class="text-xs text-secondary mb-0">Personal/family bank statements
                                                        for the last 6 months <br>and a balance confirmation letter from the
                                                        bank</p>
                                                </div>
                                            </div>
                                        </td>
                                        @if (!empty($data->doc_saving_account))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_saving_account_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                            class="mb-1 px-2 py-1 @if ($data->doc_saving_account_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/financial_documents/'.$data->doc_saving_account) }}" download><button type="button"
                                                    class="btn bg-gradient-primary text-white">Download</button></a>
                                                    <a href="{{ route('updateFinancialStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_saving_account']) }}">
                                                        <button type='submit' class="btn bg-gradient-danger text-white">Reject</button>
                                                    </a>
                                                    <a href="{{ route('updateFinancialStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_saving_account']) }}">
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
                                                    <h6 class="mb-0 text-sm">Fixed Deposit Accounts</h6>
                                                    <p class="text-xs text-secondary mb-0"> Balance confirmation letter from
                                                        the bank certifying that the funds <br>available in the account are
                                                        not held under lien and can be<br> prematurely uplifted at the
                                                        request of the account holder.</p>
                                                </div>
                                            </div>
                                        </td>
                                        @if (!empty($data->doc_fixed_deposit_accounts))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_fixed_deposit_accounts_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                            class="mb-1 px-2 py-1 @if ($data->doc_fixed_deposit_accounts_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/financial_documents/'.$data->doc_fixed_deposit_accounts) }}" download><button type="button"
                                                    class="btn bg-gradient-primary text-white">Download</button></a>
                                                    <a href="{{ route('updateFinancialStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_fixed_deposit_accounts']) }}">
                                                        <button type='submit' class="btn bg-gradient-danger text-white">Reject</button>
                                                    </a>
                                                    <a href="{{ route('updateFinancialStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_fixed_deposit_accounts']) }}">
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
                                                    <h6 class="mb-0 text-sm">Current Accounts <span class="text-danger">*</span></h6>
                                                    <p class="text-xs text-secondary mb-0">Bank Statements showing what has
                                                        been paid in and out of an account <br> for up to the previous six
                                                        months, and naming the account holder</p>
                                                </div>
                                            </div>
                                        </td>
                                        @if (!empty($data->doc_current_accounts))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_current_accounts_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                            class="mb-1 px-2 py-1 @if ($data->doc_current_accounts_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/financial_documents/'.$data->doc_current_accounts) }}" download><button type="button"
                                                    class="btn bg-gradient-primary text-white">Download</button></a>
                                                    <a href="{{ route('updateFinancialStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_current_accounts']) }}">
                                                        <button type='submit' class="btn bg-gradient-danger text-white">Reject</button>
                                                    </a>
                                                    <a href="{{ route('updateFinancialStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_current_accounts']) }}">
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
                                                    <h6 class="mb-0 text-sm">Money available in Credit Cards</h6>
                                                    <p class="text-xs text-secondary mb-0">Credit limit confirmation
                                                        letter/recent credit card statements</p>
                                                </div>
                                            </div>
                                        </td>
                                        @if (!empty($data->doc_money_of_credit_cards))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_money_of_credit_cards_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                            class="mb-1 px-2 py-1 @if ($data->doc_money_of_credit_cards_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/financial_documents/'.$data->doc_money_of_credit_cards) }}" download><button type="button"
                                                    class="btn bg-gradient-primary text-white">Download</button></a>
                                                    <a href="{{ route('updateFinancialStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_money_of_credit_cards']) }}">
                                                        <button type='submit' class="btn bg-gradient-danger text-white">Reject</button>
                                                    </a>
                                                    <a href="{{ route('updateFinancialStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_money_of_credit_cards']) }}">
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
                                                    <h6 class="mb-0 text-sm">Life Insurance / Travel Medical Insurance
                                                        policies </h6>
                                                    <p class="text-xs text-secondary mb-0">(If any)</p>
                                                </div>
                                            </div>
                                        </td>
                                        @if (!empty($data->doc_insurance))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_insurance_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                            class="mb-1 px-2 py-1 @if ($data->doc_insurance_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/financial_documents/'.$data->doc_insurance) }}" download><button type="button"
                                                    class="btn bg-gradient-primary text-white">Download</button></a>
                                                    <a href="{{ route('updateFinancialStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_insurance']) }}">
                                                        <button type='submit' class="btn bg-gradient-danger text-white">Reject</button>
                                                    </a>
                                                    <a href="{{ route('updateFinancialStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_insurance']) }}">
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
                                                    <h6 class="mb-0 text-sm">Evidence of assets <span class="text-danger">*</span></h6>
                                                    <p class="text-xs text-secondary mb-0">Documentation for your assets
                                                        may include property deeds and vehicle registrations.<br> Property
                                                        valuation is optional but can be included.</p>
                                                </div>
                                            </div>
                                        </td>
                                        @if (!empty($data->doc_evidence_of_assets))
                                        <td>
                                            <div class="text-uppercase d-flex px-2 py-1">
                                                {{ $data->doc_evidence_of_assets_status }}
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                            class="mb-1 px-2 py-1 @if ($data->doc_evidence_of_assets_status == 'rejected') d-none @endif">
                                                <a href="{{ URL::asset('/build/financial_documents/'.$data->doc_evidence_of_assets) }}" download><button type="button"
                                                    class="btn bg-gradient-primary text-white">Download</button></a>
                                                    <a href="{{ route('updateFinancialStatus', ['id' => $data->user_id, 'status' => 'rejected', 'name' => 'doc_evidence_of_assets']) }}">
                                                        <button type='submit' class="btn bg-gradient-danger text-white">Reject</button>
                                                    </a>
                                                    <a href="{{ route('updateFinancialStatus', ['id' => $data->user_id, 'status' => 'verified', 'name' => 'doc_evidence_of_assets']) }}">
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
