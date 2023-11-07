@extends('layouts.app')

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

                        @if (empty($financial_document))
                            <form method="post" action="{{ route('financial.documents.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                            @else
                                <form method="POST"
                                    action="{{ route('financial.documents.update', $financial_document->id) }}"
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

                                        @if (!empty($financial_document))
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
                                                    <h6 class="mb-0 text-sm">Saving Accounts <span class="text-danger">*</span></h6>
                                                    <p class="text-xs text-secondary mb-0">Personal/family bank statements
                                                        for the last 6 months <br>and a balance confirmation letter from the
                                                        bank</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                            <div class="mb-3">
                                                <input class="form-control" type="file" id="formFile"
                                                    name="saving_account" @if (
                                                        !empty($financial_document) &&
                                                            ($financial_document->doc_saving_account_status == 'pending' ||
                                                                $financial_document->doc_saving_account_status == 'verified')) disabled @endif>
                                            </div>
                                            </p>
                                        </td>

                                        @if (!empty($financial_document))
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge badge-sm
                                                    @if ($financial_document->doc_saving_account_status == 'verified') bg-gradient-success
                                                    @elseif($financial_document->doc_saving_account_status == 'rejected') bg-gradient-danger
                                                    @elseif($financial_document->doc_saving_account_status == 'pending') bg-gradient-warning
                                                    @else bg-gradient-secondary @endif ">{{ $financial_document->doc_saving_account_status }}
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
                                                    <h6 class="mb-0 text-sm">Fixed Deposit Accounts</h6>
                                                    <p class="text-xs text-secondary mb-0"> Balance confirmation letter from
                                                        the bank certifying that the funds <br>available in the account are
                                                        not held under lien and can be<br> prematurely uplifted at the
                                                        request of the account holder.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                            <div class="mb-3">
                                                <input class="form-control" type="file" id="formFile"
                                                    name="fixed_deposit_accounts"
                                                    @if (
                                                        !empty($financial_document) &&
                                                            ($financial_document->doc_fixed_deposit_accounts_status == 'pending' ||
                                                                $financial_document->doc_fixed_deposit_accounts_status == 'verified')) disabled @endif>
                                            </div>
                                            </p>

                                        </td>

                                        @if (!empty($financial_document))
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge badge-sm
                                                @if ($financial_document->doc_fixed_deposit_accounts_status == 'verified') bg-gradient-success
                                                @elseif($financial_document->doc_fixed_deposit_accounts_status == 'rejected') bg-gradient-danger
                                                @elseif($financial_document->doc_fixed_deposit_accounts_status == 'pending') bg-gradient-warning
                                                @else bg-gradient-secondary @endif">{{ $financial_document->doc_fixed_deposit_accounts_status }}
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
                                                    <h6 class="mb-0 text-sm">Current Accounts <span class="text-danger">*</span></h6>
                                                    <p class="text-xs text-secondary mb-0">Bank Statements showing what has
                                                        been paid in and out of an account <br> for up to the previous six
                                                        months, and naming the account holder</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                            <div class="mb-3">
                                                <input class="form-control" type="file" id="formFile"
                                                    name="current_accounts"
                                                    @if (
                                                        !empty($financial_document) &&
                                                            ($financial_document->doc_current_accounts_status == 'pending' ||
                                                                $financial_document->doc_current_accounts_status == 'verified')) disabled @endif>
                                            </div>
                                            </p>

                                        </td>

                                        @if (!empty($financial_document))
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge badge-sm
                                                @if ($financial_document->doc_current_accounts_status == 'verified') bg-gradient-success
                                                @elseif($financial_document->doc_current_accounts_status == 'rejected') bg-gradient-danger
                                                @elseif($financial_document->doc_current_accounts_status == 'pending') bg-gradient-warning
                                                @else bg-gradient-secondary @endif">{{ $financial_document->doc_current_accounts_status }}
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
                                                    <h6 class="mb-0 text-sm">Money available in Credit Cards</h6>
                                                    <p class="text-xs text-secondary mb-0">Credit limit confirmation
                                                        letter/recent credit card statements</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                            <div class="mb-3">
                                                <input class="form-control" type="file" id="formFile"
                                                    name="money_of_credit_cards"
                                                    @if (
                                                        !empty($financial_document) &&
                                                            ($financial_document->doc_money_of_credit_cards_status == 'pending' ||
                                                                $financial_document->doc_money_of_credit_cards_status == 'verified')) disabled @endif>
                                            </div>
                                            </p>
                                        </td>
                                        @if (!empty($financial_document))
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge badge-sm
                                                @if ($financial_document->doc_money_of_credit_cards_status == 'verified') bg-gradient-success
                                                @elseif($financial_document->doc_money_of_credit_cards_status == 'rejected') bg-gradient-danger
                                                @elseif($financial_document->doc_money_of_credit_cards_status == 'pending') bg-gradient-warning
                                                @else bg-gradient-secondary @endif">
                                                    {{ $financial_document->doc_money_of_credit_cards_status }}
                                                </span>
                                        @endif
                                        </td>
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
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                            <div class="mb-3">
                                                <input class="form-control" type="file" id="formFile" name="insurance"
                                                    @if (
                                                        !empty($financial_document) &&
                                                            ($financial_document->doc_insurance_status == 'pending' ||
                                                                $financial_document->doc_insurance_status == 'verified')) disabled @endif>
                                            </div>
                                            </p>
                                        </td>
                                        @if (!empty($financial_document))
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge badge-sm
                                                @if ($financial_document->doc_insurance_status == 'verified') bg-gradient-success
                                                @elseif($financial_document->doc_insurance_status == 'rejected') bg-gradient-danger
                                                @elseif($financial_document->doc_insurance_status == 'pending') bg-gradient-warning
                                                @else bg-gradient-secondary @endif">{{ $financial_document->doc_insurance_status }}
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
                                                    <h6 class="mb-0 text-sm">Evidence of assets <span class="text-danger">*</span></h6>
                                                    <p class="text-xs text-secondary mb-0">Documentation for your assets
                                                        may include property deeds and vehicle registrations.<br> Property
                                                        valuation is optional but can be included.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                            <div class="mb-3">
                                                <input class="form-control" type="file" id="formFile"
                                                    name="evidence_of_assets"
                                                    @if (
                                                        !empty($financial_document) &&
                                                            ($financial_document->doc_evidence_of_assets_status == 'pending' ||
                                                                $financial_document->doc_evidence_of_assets_status == 'verified')) disabled @endif>
                                            </div>
                                            </p>
                                        </td>

                                        @if (!empty($financial_document))
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge badge-sm
                                                @if ($financial_document->doc_evidence_of_assets_status == 'verified') bg-gradient-success
                                                @elseif($financial_document->doc_evidence_of_assets_status == 'rejected') bg-gradient-danger
                                                @elseif($financial_document->doc_evidence_of_assets_status == 'pending') bg-gradient-warning
                                                @else bg-gradient-secondary @endif">
                                                    {{ $financial_document->doc_evidence_of_assets_status }}
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
