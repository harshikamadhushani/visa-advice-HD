@extends('layouts.admin-app')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="container-fluid py-4">

    <div class="row my-4 ">
      <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
        <div class="card">
          <div class="card-header pb-0">
            <div class="row">
              <div class="col-lg-6 col-7">
                <h6>All Visa Appliers</h6>
              </div>
            </div>
          </div>

          <div class="card-body px-0 pb-2">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Profile</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">User Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Mobile No</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Passport Number</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Email</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-6 ">Actions</th>
                  </tr>
                </thead>

                    @foreach ($users as $user )
                    <tbody>
                        <tr>
                            <td>
                                @if ($user->profile_pic)
                                <div class="avatar-group mt-2">
                                    <a href="{{ route('getUser', $user->id) }}" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $user->name }}">
                                        <img src="{{ asset('build/assets/img/profile_pic/' . $user->profile_pic) }}">
                                    </a>

                                </div>
                                @else
                                <div class="avatar-group mt-2">
                                    <a href="{{ route('getUser', $user->id) }}" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $user->name }}">
                                        <img src="{{ URL::asset('/build/assets/img/person-icon.png') }}">
                                    </a>
                                </div>
                                @endif
                            </td>

                            <td>
                                <div class="d-flex py-2 px-3">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                    </div>
                                </div>
                            </td>

                            <td class="align-middle text-center text-sm">
                                <span class="text-xs font-weight-bold">{{ $user->mobile_no }}</span>
                            </td>

                            <td class="align-middle text-center text-sm">
                                <span class="text-xs font-weight-bold">{{ $user->passport_no }}</span>
                            </td>

                            <td class="align-middle text-center text-sm">
                                <span class="text-xs font-weight-bold">{{ $user->email }}</span>
                            </td>

                            <td class="align-middle">
                                <div class="action text-xs font-weight-bold progress-wrapper w-75 mx-auto">
                                    <a class="btn btn-link badge badge-xm bg-gradient-success" href="{{ route('download.personal.documents', $user->id) }}">Download</a>
                                    
                                </div>
                            </td>
                        </tr>
                    </tbody>

                    @endforeach


              </table>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>
@endsection
