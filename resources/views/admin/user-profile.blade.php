@extends('layouts.admin-app')

@section('title')
    Profile
@endsection

@section('content')
    @foreach ($user as $data)
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
                </div>
            </div>
        </div>


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
                                                {{-- <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                    href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a> --}}
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
                                                {{-- <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                    href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a> --}}
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
                                                <a class="btn btn-link badge badge-xm bg-gradient-primary">Download</a>
                                                {{-- <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                    href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a> --}}
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
                                                <a class="btn btn-link badge badge-xm bg-gradient-primary">Download</a>
                                                {{-- <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                    href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a> --}}
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
                                                <a class="btn btn-link badge badge-xm bg-gradient-primary">Download</a>
                                                {{-- <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                    href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a> --}}
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
    @endforeach
@endsection
