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
                        <div class="col-md-4 text-end">
                            <a href="javascript:;">
                                <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" title="Edit Profile"></i>
                            </a>
                        </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form method="POST" action="{{ route('admin.profile.update', auth()->user()->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit profile</h5>
                                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        @if ($profile->profile_pic)
                                        <div class="avatar avatar-xl position-relative">
                                            <img id="profileImage" src="{{ URL::asset('/build/assets/img/profile_pic/' . $profile->profile_pic) }}"
                                                alt="profile_image" class="w-100 border-radius-lg shadow-sm" style="margin-left: 15px;">
                                            <a href="#" id="removeProfilePic">
                                                <i class="fas fa-trash-alt text-secondary text-sm" title="Remove Profile Pic" style="margin-left: 10px;"></i>
                                            </a>
                                        </div>
                                        @else
                                        <div class="avatar avatar-xl position-relative">
                                            <img src="{{ URL::asset('/build/assets/img/person-icon.png') }}"
                                                alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                                        </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="profile_pic">Profile Picture</label>
                                        <input type="file" class="form-control-file" id="profile_pic" name="profile_pic">

                                    </div>

                                    <div class="form-group">
                                        <label for="about">About you</label>
                                        <textarea class="form-control" id="about" name="about" rows="3">{{ auth()->user()->about }}</textarea>
                                    </div>


                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input class="form-control" type="text" id="name" name="name"
                                            value="{{ auth()->user()->name }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="passport_no">Mobile No</label>
                                        <input class="form-control" type="text" id="mobile_no" name="mobile_no"
                                            value="{{ auth()->user()->mobile_no }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="name@example.com" value="{{ auth()->user()->email }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="postal_address">Postal Address</label>
                                        <input class="form-control" type="text" id="postal_address"
                                            name="postal_address" value="{{ auth()->user()->postal_address }}">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn bg-gradient-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn bg-gradient-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#removeProfilePic').on('click', function (e) {
            e.preventDefault();

            $.ajax({
                url: '{{ route("removeProfilePic") }}',
                method: 'POST',
                data: { _token: '{{ csrf_token() }}' },
                success: function (data) {
                    location.reload();
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
