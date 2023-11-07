@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')

    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        $53,000
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Clients</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        1200
                                        <span class="text-success text-sm font-weight-bolder">+3%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">New Clients</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        +43
                                        <span class="text-danger text-sm font-weight-bolder"></span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-lg-7 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <p class="mb-1 pt-2 text-bold">Discover Your Dream Country</p>
                                    <h5 class="font-weight-bolder">Visa Advice</h5>
                                    <p class="mb-5"> Whether it's the allure of historic cities, stunning landscapes, or a
                                        vibrant culture, we're here to help you turn your dream into reality. </p>
                                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                        href="javascript:;">
                                        Read More
                                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                                <div class="bg-gradient-primary border-radius-lg h-100">
                                    <img src="../build/assets/img/shapes/waves-white.svg"
                                        class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                        <img class="w-100 position-relative z-index-2 pt-4"
                                            src="../build/assets/img/illustrations/rocket-white.png" alt="rocket">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card h-100 p-3">
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                        style="background-image: url('../assets/img/ivancik.jpg');">
                        <span class="mask bg-gradient-dark"></span>
                        <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                            <h5 class="text-white font-weight-bolder mb-4 pt-2">Unlock Boundless Horizons</h5>
                            <p class="text-white">Explore the world with ease. Our visa experts are here to simplify your
                                journey. Seamless, stress-free visa solutions tailored just for you. Your dream destinations
                                await.</p>
                            <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                                Read More
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4 " style="margin-left: 20px; margin-top: 50px;">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">You have to</p>
                        <h5 class="font-weight-bolder mb-0">
                          Complete Your Profile
                          <div class="progress-wrapper">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-sm font-weight-bold">20%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                            </div>
                          </div>
                          <a href="./profile.html" class="text-success text-sm font-weight-bolder">Let's Start</a>
                        </h5>
                      </div>

                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="fas fa-user text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-7 col-sm-6 mb-xl-0 mb-4 " style="margin-left: 20px; margin-top: 50px;">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Where do you want to go</p>
                        <h5 class="font-weight-bolder mb-0">
                          Select Your Destination</h5>
                          and add the purpose <bR>
                          <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top: 20px;">
                          Country <i class="fas fa-arrow-right"></i>
                          </button>


                          <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Country</h5>
              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                  <label for="country">Select a Country:</label>
                  <select id="country" class="form-control" name="country">
                  </select>
                </div>


              <div class="form-group">
                <label for="exampleFormControlTextarea1">Purpose of Journey</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="For my higher studies"></textarea>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn bg-gradient-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

                      </div>

                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
















            <div class="container-fluid py-4">
            <div class="row">
              <div class="col-11">
                <div class="card mb-4">
                  <div class="card-header pb-0">
                    <h6>Recent Activity</h6>
                  </div>
                  <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Documents</th>

                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                            <th class="text-secondary opacity-7"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>

                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">Sponsor Invitation Letter</h6>
                                  <p class="text-xs text-secondary mb-0">PDF</p>
                                </div>
                              </div>
                            </td>

                            <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-success">Pending</span>
                            </td>
                            <td class="align-middle text-center">
                              <div class="ms-auto text-end">

                                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-p-alt text-dark me-2" aria-hidden="true"></i>Resume</a>
                              </div>
                            </td>

                          </tr>

                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>

                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">Accountant Letter & Tax Records (For 3 Years)</h6>
                                  <p class="text-xs text-secondary mb-0">If Self Employed</p>
                                </div>
                              </div>
                            </td>

                            <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-secondary">Uploaded</span>
                            </td>
                            <td class="align-middle text-center">
                              <div class="ms-auto text-end">

                                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                              </div>
                            </td>

                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>

                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">Hosts Birth Certificate/ Marriage Certificate </h6>
                                  <p class="text-xs text-secondary mb-0">Evidence to show how you are related with host</p>
                                </div>
                              </div>
                            </td>

                            <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-secondary">Uploaded</span>
                            </td>
                            <td class="align-middle text-center">
                              <div class="ms-auto text-end">

                                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
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

            <footer class="footer pt-3  ">
              <div class="container-fluid">

              </div>
            </footer>
          </div>

    </div>
@endsection
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }





    // Get the select element by its ID
    const countrySelect = document.getElementById('country');

    // Fetch a list of countries from a JSON data source
    fetch('https://restcountries.com/v3.2/all')
      .then(response => response.json())
      .then(data => {
        data.forEach(country => {
          // Create an option for each country
          const option = document.createElement('option');
          option.value = country.name.common;
          option.text = country.name.common;
          countrySelect.appendChild(option);
        });
      })
      .catch(error => console.error('Error fetching data: ' + error));

  </script>
