@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Required Documents</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Documents</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Upload</th>
{{--                     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th> --}}
                    {{-- <th class="text-secondary opacity-7"></th> --}}

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>

                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Current Passports and Previous Passport</h6>
                          <p class="text-xs text-secondary mb-0">jpeg</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">
                        <div class="mb-3">
                        <input class="form-control" type="file" id="formFile">
                        </div>
                      </p>

                    </td>


{{--                     <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Uploaded</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="ms-auto text-end">
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </div>
                    </td> --}}



                  </tr>


                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>

                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Documents showing where you live currently</h6>
                          <p class="text-xs text-secondary mb-0"> Property deed or tenancy agreement is required for the visa application.</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile">
                        </div></p>



{{--                     </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary">No</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="ms-auto text-end">
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </div>
                    </td> --}}


                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>

                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Birth Certificate with English Translation</h6>
                          <p class="text-xs text-secondary mb-0"></p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile">
                        </div></p>
                    </td>


{{--                     <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Online</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="ms-auto text-end">
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </div>
                    </td> --}}


                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Marriage certificate/other with English Translation</h6>
                          <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile">
                        </div></p>
                    </td>


{{--                     <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Online</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="ms-auto text-end">
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </div>
                    </td> --}}

                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>

                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Birth Certificates of children with English Translation</h6>
                          <p class="text-xs text-secondary mb-0"></p>
                        </div>
                      </div>
                    </td>

                    <td>
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile">
                        </div></p>
                    </td>


{{--                     <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="ms-auto text-end">
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </div>
                    </td> --}}


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
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile">
                        </div></p>
                    </td>



{{--                     <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="ms-auto text-end">
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </div>
                    </td> --}}

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
                      <p class="text-xs font-weight-bold mb-0"> <div class="mb-3">
                        <input class="form-control" type="file" id="formFile">
                        </div></p>
                    </td>


{{--                     <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="ms-auto text-end">
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </div>
                    </td> --}}

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
