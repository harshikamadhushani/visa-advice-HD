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

                    @if ($profile->profile_pic)
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ URL::asset('/build/assets/img/profile_pic/' . $profile->profile_pic) }}"
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
                            {{ $profile->name }}
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
                        {{ $profile->about }}
                    </p>
                    <hr class="horizontal gray-light my-4">
                    <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full
                                Name:</strong>
                            &nbsp; {{ $profile->name }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong>
                            &nbsp;
                            {{ $profile->mobile_no }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong>
                            &nbsp;
                            {{ $profile->email }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Passport No:</strong>
                            &nbsp;
                            {{ $profile->passport_no }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Postal Address:</strong>
                            &nbsp;
                            {{ $profile->postal_address }}</li>


                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div style="display: none;">
                <div>
                    <div class="chart">
                        <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card z-index-2">
                    <div class="card-header pb-0">
                        <h6>Applications Overview</h6>
                        <p class="text-sm">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold">4% more</span> in 2021
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
