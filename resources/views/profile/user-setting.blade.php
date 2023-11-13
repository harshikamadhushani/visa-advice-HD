@extends('layouts.app')

@section('title')
    Setting
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
                            {{ auth()->user()->name }}
                        </h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="POST" action="{{ route('resetPassword') }}">
        @csrf

        <div class="row mt-6">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="card h-100" style="margin-left: 40px;">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Reset Password</h6>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                        <ul class="list-group">

                            <div class="form-group">
                                <label for="old_password" class="col-form-label">Old Password:</label>
                                <input type="password" class="form-control" name="old_password" placeholder="Old Password">
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input type="password" name="new_password" class="form-control" placeholder="New Password">
                                @error('new_password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                                @error('confirm_password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn bg-gradient-success">Submit</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
