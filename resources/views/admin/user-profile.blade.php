@extends('layouts.admin-app')

@section('title')
    Profile
@endsection

@section('content')
        <div class="container-fluid">

            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('../build/assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                <div class="row gx-4">
                    <div class="col-auto">

                        @if ($data->profile_pic)
                            <div class="avatar avatar-xl position-relative">
                                <img src="{{ URL::asset('/build/assets/img/profile_pic/' . $data->profile_pic) }}"
                                    alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                            </div>
                        @else
                            <div class="avatar avatar-xl position-relative">
                                <img src="{{ URL::asset('/build/assets/img/person-icon.png') }}" alt="profile_image"
                                    class="w-100 border-radius-lg shadow-sm">
                            </div>
                        @endif

                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ $data->name }}
                            </h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active" href="https://calendly.com/" target="_blank" role="tab" aria-selected="true">
                                        <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(603.000000, 0.000000)">
                                                            <path class="color-background"
                                                                d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                            </path>
                                                            <path class="color-background"
                                                                d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                opacity="0.7"></path>
                                                            <path class="color-background"
                                                                d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                opacity="0.7"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ms-1">Schedule Meeting</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModalMessage" role="tab"  aria-selected="true" id="messagesLink">
                                        <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
                                            <title>document</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(154.000000, 300.000000)">
                                                            <path class="color-background"
                                                                d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                opacity="0.603585379"></path>
                                                            <path class="color-background"
                                                                d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ms-1">Messages</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <!-- Modal -->
            <form id="emailForm" action="mailto:{{ $data->email }}" method="post" enctype="text/plain">
                <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New message to {{ $data->name }}</h5>
                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Subject:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn bg-gradient-primary" onclick="sendEmail()">Send message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


        <div class="row mt-4">
            <div class="col-lg-5 mb-lg-0 mb-4">
                <div class="card h-100" style="margin-left: 40px;">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">Profile Information</h6>
                            </div>

                        </div>
                    </div>
                    <div class="card-body p-3">
                        <p class="text-sm">
                            {{ $data->about }}
                        </p>
                        <hr class="horizontal gray-light my-4">
                        <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full
                                    Name:</strong>
                                &nbsp; {{ $data->name }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong>
                                &nbsp;
                                {{ $data->mobile_no }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong>
                                &nbsp;
                                {{ $data->email }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Passport
                                    No:</strong>
                                &nbsp;
                                {{ $data->passport_no }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Postal
                                    Address:</strong>
                                &nbsp;
                                {{ $data->postal_address }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Country Name:</strong>
                                &nbsp;
                                {{ $data->country_name }}
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Purpose of Journey and Expecting Visa Type:</strong>
                                &nbsp;
                                {{ $data->purpose }}</li>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card z-index-2">
                    <div class="card-header pb-0">
                        <h6>Documents</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                            Document Type</th>

                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-6 ">
                                            Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Personal Document</h6>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="align-middle">
                                            <div class="action text-xs font-weight-bold progress-wrapper w-75 mx-auto ">
                                                <a href="{{ route('download.personal.documents', $data->id) }}" class="btn btn-link badge badge-xm bg-gradient-primary">Download</a>
                                                <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                    href="{{ route('checkPersonalDoc',$data->id) }}"><i class="far fa-eye-alt me-2"></i>View</a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Financial Document</h6>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="align-middle">
                                            <div class="action text-xs font-weight-bold progress-wrapper w-75 mx-auto ">
                                                <a href="{{ route('download.financial.documents', $data->id) }}" class="btn btn-link badge badge-xm bg-gradient-primary">Download</a>
                                                <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                    href="{{ route('checkFinancialDoc',$data->id) }}"><i class="far fa-eye-alt me-2"></i>View</a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Employment Document</h6>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="align-middle">
                                            <div class="action text-xs font-weight-bold progress-wrapper w-75 mx-auto ">
                                                <a href="{{ route('download.employment.documents', $data->id) }}" class="btn btn-link badge badge-xm bg-gradient-primary">Download</a>
                                                <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                    href="{{ route('checkEmploymentDoc',$data->id) }}"><i class="far fa-eye-alt me-2"></i>View</a>
                                            </div>
                                        </td>

                                    </tr>


                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Sponsor Document</h6>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="align-middle">
                                            <div class="action text-xs font-weight-bold progress-wrapper w-75 mx-auto ">
                                                <a href="{{ route('download.sponsor.documents', $data->id) }}" class="btn btn-link badge badge-xm bg-gradient-primary">Download</a>
                                                <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                href="{{ route('checkSponsorDoc',$data->id) }}"><i class="far fa-eye-alt me-2"></i>View</a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"> Non Sponsor Document</h6>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="align-middle">
                                            <div class="action text-xs font-weight-bold progress-wrapper w-75 mx-auto ">
                                                <a href="{{ route('download.non.sponsor.documents', $data->id) }}" class="btn btn-link badge badge-xm bg-gradient-primary">Download</a>
                                                <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                href="{{ route('checkNonSponsorDoc',$data->id) }}"><i class="far fa-eye-alt me-2"></i>View</a>
                                            </div>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    document.getElementById('messagesLink').addEventListener('click', function () {
        var myModal = new bootstrap.Modal(document.getElementById('exampleModalMessage'));
        myModal.show();
    });
    function sendEmail() {
        var subject = $('#recipient-name').val();
        var message = $('#message-text').val();
        var emailLink = "mailto:{{ $data->email }}?subject=" + encodeURIComponent(subject) + '&body=' + encodeURIComponent(message);
        window.location.href = emailLink;
    }
</script>

