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
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Id Number</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Visa Number</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Email</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-6 ">Actions</th>
                  </tr>
                </thead>

              </table>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>
@endsection
