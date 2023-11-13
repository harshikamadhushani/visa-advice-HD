@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
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
                                                    <span
                                                        class="text-sm font-weight-bold">{{ $profileCompletionPercentage }}%</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-namenow="20"
                                                    aria-namemin="0" aria-namemax="100" style="width: 20%;"></div>
                                            </div>
                                        </div>
                                        <a class="text-success text-sm font-weight-bolder"
                                            href="{{ route('user.profile') }}"> Let's Start</a>
                                    </h5>
                                </div>

                            </div>
                            <div class="col-4 ">
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
                                    <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" style="margin-top: 20px;">
                                        Country <i class="fas fa-arrow-right"></i>
                                    </button>


                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Country</h5>
                                                    <button type="button" class="btn-close text-dark"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form action="{{ route('saveCountry', $user->id) }}" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="country">Select a Country:</label>
                                                            <select id="country" name="country" class="form-control">
                                                                <option name="Afghanistan">Afghanistan</option>
                                                                <option name="Åland Islands">Åland Islands</option>
                                                                <option name="Albania">Albania</option>
                                                                <option name="Algeria">Algeria</option>
                                                                <option name="American Samoa">American Samoa</option>
                                                                <option name="Andorra">Andorra</option>
                                                                <option name="Angola">Angola</option>
                                                                <option name="Anguilla">Anguilla</option>
                                                                <option name="Antarctica">Antarctica</option>
                                                                <option name="Antigua and Barbuda">Antigua and Barbuda
                                                                </option>
                                                                <option name="Argentina">Argentina</option>
                                                                <option name="Armenia">Armenia</option>
                                                                <option name="Aruba">Aruba</option>
                                                                <option name="Australia">Australia</option>
                                                                <option name="Austria">Austria</option>
                                                                <option name="Azerbaijan">Azerbaijan</option>
                                                                <option name="Bahamas">Bahamas</option>
                                                                <option name="Bahrain">Bahrain</option>
                                                                <option name="Bangladesh">Bangladesh</option>
                                                                <option name="Barbados">Barbados</option>
                                                                <option name="Belarus">Belarus</option>
                                                                <option name="Belgium">Belgium</option>
                                                                <option name="Belize">Belize</option>
                                                                <option name="Benin">Benin</option>
                                                                <option name="Bermuda">Bermuda</option>
                                                                <option name="Bhutan">Bhutan</option>
                                                                <option name="Bolivia">Bolivia</option>
                                                                <option name="Bosnia and Herzegovina">Bosnia and
                                                                    Herzegovina</option>
                                                                <option name="Botswana">Botswana</option>
                                                                <option name="Bouvet Island">Bouvet Island</option>
                                                                <option name="Brazil">Brazil</option>
                                                                <option name="British Indian Ocean Territory">British
                                                                    Indian Ocean Territory</option>
                                                                <option name="Brunei Darussalam">Brunei Darussalam</option>
                                                                <option name="Bulgaria">Bulgaria</option>
                                                                <option name="Burkina Faso">Burkina Faso</option>
                                                                <option name="Burundi">Burundi</option>
                                                                <option name="Cambodia">Cambodia</option>
                                                                <option name="Cameroon">Cameroon</option>
                                                                <option name="Canada">Canada</option>
                                                                <option name="Cape Verde">Cape Verde</option>
                                                                <option name="Cayman Islands">Cayman Islands</option>
                                                                <option name="Central African Republic">Central African
                                                                    Republic</option>
                                                                <option name="Chad">Chad</option>
                                                                <option name="Chile">Chile</option>
                                                                <option name="China">China</option>
                                                                <option name="Christmas Island">Christmas Island</option>
                                                                <option name="Cocos (Keeling) Islands">Cocos (Keeling)
                                                                    Islands</option>
                                                                <option name="Colombia">Colombia</option>
                                                                <option name="Comoros">Comoros</option>
                                                                <option name="Congo">Congo</option>
                                                                <option name="Congo, The Democratic Republic of The">Congo,
                                                                    The Democratic Republic of The</option>
                                                                <option name="Cook Islands">Cook Islands</option>
                                                                <option name="Costa Rica">Costa Rica</option>
                                                                <option name="Cote D'ivoire">Cote D'ivoire</option>
                                                                <option name="Croatia">Croatia</option>
                                                                <option name="Cuba">Cuba</option>
                                                                <option name="Cyprus">Cyprus</option>
                                                                <option name="Czech Republic">Czech Republic</option>
                                                                <option name="Denmark">Denmark</option>
                                                                <option name="Djibouti">Djibouti</option>
                                                                <option name="Dominica">Dominica</option>
                                                                <option name="Dominican Republic">Dominican Republic
                                                                </option>
                                                                <option name="Ecuador">Ecuador</option>
                                                                <option name="Egypt">Egypt</option>
                                                                <option name="El Salvador">El Salvador</option>
                                                                <option name="Equatorial Guinea">Equatorial Guinea</option>
                                                                <option name="Eritrea">Eritrea</option>
                                                                <option name="Estonia">Estonia</option>
                                                                <option name="Ethiopia">Ethiopia</option>
                                                                <option name="Falkland Islands (Malvinas)">Falkland Islands
                                                                    (Malvinas)</option>
                                                                <option name="Faroe Islands">Faroe Islands</option>
                                                                <option name="Fiji">Fiji</option>
                                                                <option name="Finland">Finland</option>
                                                                <option name="France">France</option>
                                                                <option name="French Guiana">French Guiana</option>
                                                                <option name="French Polynesia">French Polynesia</option>
                                                                <option name="French Southern Territories">French Southern
                                                                    Territories</option>
                                                                <option name="Gabon">Gabon</option>
                                                                <option name="Gambia">Gambia</option>
                                                                <option name="Georgia">Georgia</option>
                                                                <option name="Germany">Germany</option>
                                                                <option name="Ghana">Ghana</option>
                                                                <option name="Gibraltar">Gibraltar</option>
                                                                <option name="Greece">Greece</option>
                                                                <option name="Greenland">Greenland</option>
                                                                <option name="Grenada">Grenada</option>
                                                                <option name="Guadeloupe">Guadeloupe</option>
                                                                <option name="Guam">Guam</option>
                                                                <option name="Guatemala">Guatemala</option>
                                                                <option name="Guernsey">Guernsey</option>
                                                                <option name="Guinea">Guinea</option>
                                                                <option name="Guinea-bissau">Guinea-bissau</option>
                                                                <option name="Guyana">Guyana</option>
                                                                <option name="Haiti">Haiti</option>
                                                                <option name="Heard Island and Mcdonald Islands">Heard
                                                                    Island and Mcdonald Islands</option>
                                                                <option name="Holy See (Vatican City State)">Holy See
                                                                    (Vatican City State)</option>
                                                                <option name="Honduras">Honduras</option>
                                                                <option name="Hong Kong">Hong Kong</option>
                                                                <option name="Hungary">Hungary</option>
                                                                <option name="Iceland">Iceland</option>
                                                                <option name="India">India</option>
                                                                <option name="Indonesia">Indonesia</option>
                                                                <option name="Iran, Islamic Republic of">Iran, Islamic
                                                                    Republic of</option>
                                                                <option name="Iraq">Iraq</option>
                                                                <option name="Ireland">Ireland</option>
                                                                <option name="Isle of Man">Isle of Man</option>
                                                                <option name="Israel">Israel</option>
                                                                <option name="Italy">Italy</option>
                                                                <option name="Jamaica">Jamaica</option>
                                                                <option name="Japan">Japan</option>
                                                                <option name="Jersey">Jersey</option>
                                                                <option name="Jordan">Jordan</option>
                                                                <option name="Kazakhstan">Kazakhstan</option>
                                                                <option name="Kenya">Kenya</option>
                                                                <option name="Kiribati">Kiribati</option>
                                                                <option name="Korea, Democratic People's Republic of">
                                                                    Korea, Democratic People's Republic of</option>
                                                                <option name="Korea, Republic of">Korea, Republic of
                                                                </option>
                                                                <option name="Kuwait">Kuwait</option>
                                                                <option name="Kyrgyzstan">Kyrgyzstan</option>
                                                                <option name="Lao People's Democratic Republic">Lao
                                                                    People's Democratic Republic</option>
                                                                <option name="Latvia">Latvia</option>
                                                                <option name="Lebanon">Lebanon</option>
                                                                <option name="Lesotho">Lesotho</option>
                                                                <option name="Liberia">Liberia</option>
                                                                <option name="Libyan Arab Jamahiriya">Libyan Arab
                                                                    Jamahiriya</option>
                                                                <option name="Liechtenstein">Liechtenstein</option>
                                                                <option name="Lithuania">Lithuania</option>
                                                                <option name="Luxembourg">Luxembourg</option>
                                                                <option name="Macao">Macao</option>
                                                                <option name="Macedonia, The Former Yugoslav Republic of">
                                                                    Macedonia, The Former Yugoslav Republic of</option>
                                                                <option name="Madagascar">Madagascar</option>
                                                                <option name="Malawi">Malawi</option>
                                                                <option name="Malaysia">Malaysia</option>
                                                                <option name="Maldives">Maldives</option>
                                                                <option name="Mali">Mali</option>
                                                                <option name="Malta">Malta</option>
                                                                <option name="Marshall Islands">Marshall Islands</option>
                                                                <option name="Martinique">Martinique</option>
                                                                <option name="Mauritania">Mauritania</option>
                                                                <option name="Mauritius">Mauritius</option>
                                                                <option name="Mayotte">Mayotte</option>
                                                                <option name="Mexico">Mexico</option>
                                                                <option name="Micronesia, Federated States of">Micronesia,
                                                                    Federated States of</option>
                                                                <option name="Moldova, Republic of">Moldova, Republic of
                                                                </option>
                                                                <option name="Monaco">Monaco</option>
                                                                <option name="Mongolia">Mongolia</option>
                                                                <option name="Montenegro">Montenegro</option>
                                                                <option name="Montserrat">Montserrat</option>
                                                                <option name="Morocco">Morocco</option>
                                                                <option name="Mozambique">Mozambique</option>
                                                                <option name="Myanmar">Myanmar</option>
                                                                <option name="Namibia">Namibia</option>
                                                                <option name="Nauru">Nauru</option>
                                                                <option name="Nepal">Nepal</option>
                                                                <option name="Netherlands">Netherlands</option>
                                                                <option name="Netherlands Antilles">Netherlands Antilles
                                                                </option>
                                                                <option name="New Caledonia">New Caledonia</option>
                                                                <option name="New Zealand">New Zealand</option>
                                                                <option name="Nicaragua">Nicaragua</option>
                                                                <option name="Niger">Niger</option>
                                                                <option name="Nigeria">Nigeria</option>
                                                                <option name="Niue">Niue</option>
                                                                <option name="Norfolk Island">Norfolk Island</option>
                                                                <option name="Northern Mariana Islands">Northern Mariana
                                                                    Islands</option>
                                                                <option name="Norway">Norway</option>
                                                                <option name="Oman">Oman</option>
                                                                <option name="Pakistan">Pakistan</option>
                                                                <option name="Palau">Palau</option>
                                                                <option name="Palestinian Territory, Occupied">Palestinian
                                                                    Territory, Occupied</option>
                                                                <option name="Panama">Panama</option>
                                                                <option name="Papua New Guinea">Papua New Guinea</option>
                                                                <option name="Paraguay">Paraguay</option>
                                                                <option name="Peru">Peru</option>
                                                                <option name="Philippines">Philippines</option>
                                                                <option name="Pitcairn">Pitcairn</option>
                                                                <option name="Poland">Poland</option>
                                                                <option name="Portugal">Portugal</option>
                                                                <option name="Puerto Rico">Puerto Rico</option>
                                                                <option name="Qatar">Qatar</option>
                                                                <option name="Reunion">Reunion</option>
                                                                <option name="Romania">Romania</option>
                                                                <option name="Russian Federation">Russian Federation
                                                                </option>
                                                                <option name="Rwanda">Rwanda</option>
                                                                <option name="Saint Helena">Saint Helena</option>
                                                                <option name="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                                </option>
                                                                <option name="Saint Lucia">Saint Lucia</option>
                                                                <option name="Saint Pierre and Miquelon">Saint Pierre and
                                                                    Miquelon</option>
                                                                <option name="Saint Vincent and The Grenadines">Saint
                                                                    Vincent and The Grenadines</option>
                                                                <option name="Samoa">Samoa</option>
                                                                <option name="San Marino">San Marino</option>
                                                                <option name="Sao Tome and Principe">Sao Tome and Principe
                                                                </option>
                                                                <option name="Saudi Arabia">Saudi Arabia</option>
                                                                <option name="Senegal">Senegal</option>
                                                                <option name="Serbia">Serbia</option>
                                                                <option name="Seychelles">Seychelles</option>
                                                                <option name="Sierra Leone">Sierra Leone</option>
                                                                <option name="Singapore">Singapore</option>
                                                                <option name="Slovakia">Slovakia</option>
                                                                <option name="Slovenia">Slovenia</option>
                                                                <option name="Solomon Islands">Solomon Islands</option>
                                                                <option name="Somalia">Somalia</option>
                                                                <option name="South Africa">South Africa</option>
                                                                <option
                                                                    name="South Georgia and The South Sandwich Islands">
                                                                    South Georgia and The South Sandwich Islands</option>
                                                                <option name="Spain">Spain</option>
                                                                <option name="Sri Lanka">Sri Lanka</option>
                                                                <option name="Sudan">Sudan</option>
                                                                <option name="Suriname">Suriname</option>
                                                                <option name="Svalbard and Jan Mayen">Svalbard and Jan
                                                                    Mayen</option>
                                                                <option name="Swaziland">Swaziland</option>
                                                                <option name="Sweden">Sweden</option>
                                                                <option name="Switzerland">Switzerland</option>
                                                                <option name="Syrian Arab Republic">Syrian Arab Republic
                                                                </option>
                                                                <option name="Taiwan">Taiwan</option>
                                                                <option name="Tajikistan">Tajikistan</option>
                                                                <option name="Tanzania, United Republic of">Tanzania,
                                                                    United Republic of</option>
                                                                <option name="Thailand">Thailand</option>
                                                                <option name="Timor-leste">Timor-leste</option>
                                                                <option name="Togo">Togo</option>
                                                                <option name="Tokelau">Tokelau</option>
                                                                <option name="Tonga">Tonga</option>
                                                                <option name="Trinidad and Tobago">Trinidad and Tobago
                                                                </option>
                                                                <option name="Tunisia">Tunisia</option>
                                                                <option name="Turkey">Turkey</option>
                                                                <option name="Turkmenistan">Turkmenistan</option>
                                                                <option name="Turks and Caicos Islands">Turks and Caicos
                                                                    Islands</option>
                                                                <option name="Tuvalu">Tuvalu</option>
                                                                <option name="Uganda">Uganda</option>
                                                                <option name="Ukraine">Ukraine</option>
                                                                <option name="United Arab Emirates">United Arab Emirates
                                                                </option>
                                                                <option name="United Kingdom">United Kingdom</option>
                                                                <option name="United States">United States</option>
                                                                <option name="United States Minor Outlying Islands">United
                                                                    States Minor Outlying Islands</option>
                                                                <option name="Uruguay">Uruguay</option>
                                                                <option name="Uzbekistan">Uzbekistan</option>
                                                                <option name="Vanuatu">Vanuatu</option>
                                                                <option name="Venezuela">Venezuela</option>
                                                                <option name="Viet Nam">Viet Nam</option>
                                                                <option name="Virgin Islands, British">Virgin Islands,
                                                                    British</option>
                                                                <option name="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                                </option>
                                                                <option name="Wallis and Futuna">Wallis and Futuna</option>
                                                                <option name="Western Sahara">Western Sahara</option>
                                                                <option name="Yemen">Yemen</option>
                                                                <option name="Zambia">Zambia</option>
                                                                <option name="Zimbabwe">Zimbabwe</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Purpose of Journey and
                                                                Expecting Visa Type</label>
                                                            <textarea name='purpose' class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                                placeholder="For my higher studies"></textarea>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type='submit' class="btn bg-gradient-primary">Save
                                                            changes</button>
                                                    </div>
                                                </form>
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
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Last Upload Documents</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Documents Type</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Percentage</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action</th>
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
                                                        <h6 class="mb-0 text-sm">Personal Documents</h6>
                                                        {{-- <p class="text-xs text-secondary mb-0">PDF</p> --}}
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                {{ number_format($personal_document_percentage) }}%
                                            </td>

                                            <td class="align-middle text-center">
                                                <div class="ms-auto ">
                                                    <a href="{{ route('personal.documents.index') }}" class="btn btn-link text-primary text-gradient px-3 mb-0"
                                                        href="javascript:;"><i class="far fa-eye-alt me-2"></i>view</a>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>

                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Financial Documents</h6>
                                                        {{-- <p class="text-xs text-secondary mb-0">PDF</p> --}}
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                {{ number_format($financial_document_percentage) }}%
                                            </td>

                                            <td class="align-middle text-center">
                                                <div class="ms-auto ">
                                                    <a href="{{ route('financial.documents.index') }}" class="btn btn-link text-primary text-gradient px-3 mb-0"
                                                        href="javascript:;"><i class="far fa-eye-alt me-2"></i>view</a>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>

                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Employment Documents</h6>
                                                        {{-- <p class="text-xs text-secondary mb-0">PDF</p> --}}
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                {{ number_format($employment_document_percentage) }}%
                                            </td>

                                            <td class="align-middle text-center">
                                                <div class="ms-auto">
                                                    <a href="{{ route('employment.documents.index') }}" class="btn btn-link text-primary text-gradient px-3 mb-0"
                                                        href="javascript:;"><i class="far fa-eye-alt me-2"></i>view</a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>

                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Sponsor Visit Documents</h6>
                                                        {{-- <p class="text-xs text-secondary mb-0">PDF</p> --}}
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                {{ number_format($sponsor_document_percentage) }}%
                                            </td>

                                            <td class="align-middle text-center">
                                                <div class="ms-auto ">
                                                    <a href="{{ route('sponsor.visit.documents.index') }}" class="btn btn-link text-primary text-gradient px-3 mb-0"
                                                        href="javascript:;"><i class="far fa-eye-alt me-2"></i>view</a>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>

                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Non Sponsor Visit Documents</h6>
                                                        {{-- <p class="text-xs text-secondary mb-0">PDF</p> --}}
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                {{ number_format($non_sponsor_document_percentage) }}%
                                            </td>

                                            <td class="align-middle text-center">
                                                <div class="ms-auto ">
                                                    <a href="{{ route('non.sponsor.visit.documents.index') }}" class="btn btn-link text-primary text-gradient px-3 mb-0"
                                                        href="javascript:;"><i class="far fa-eye-alt me-2"></i>view</a>
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
        </div>
    </div>
@endsection
