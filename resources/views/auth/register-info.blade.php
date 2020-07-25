@extends('layouts.registration')

@section('content')


<div class="main">

    <div class="container">
        <form method="POST" action="{{ route('addprofile') }}" id="signup-form" class="signup-form">
            @csrf
            <h3>
                <span class="title_text">Account Infomation</span>
            </h3>
            <fieldset>
                <div class="fieldset-content">
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" disabled />
                    </div>
                    <div class="form-group">
                        <label for="username" class="form-label">Name</label>
                        <input type="text" name="username" id="username" value="{{ Auth::user()->name }}" />
                    </div>
                    <div class="form-group form-password">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" placeholder="(Leave empty for your previous password)"
                            id="password" data-indicator="pwindicator" />
                        <div id="pwindicator">
                            <div class="bar-strength">
                                <div class="bar-process">
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div class="label"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="your_avatar" class="form-label">Select avatar</label>
                        <div class="form-file">
                            <input type="file" name="your_avatar" id="your_avatar" class="custom-file-input" />
                            <span id='val'></span>
                            <span id='button'>Select File</span>
                        </div>
                    </div>
                </div>
                <div class="fieldset-footer">
                    <span>Step 1 of 3</span>
                </div>
            </fieldset>

            <h3>
                <span class="title_text">Personal Information</span>
            </h3>
            <fieldset>

                <div class="fieldset-content">
                    <div class="form-select">
                        <label for="country" class="form-label">City</label>
                        <select name="city_id" id="country" data-live-search="true" title="Select Your City" required />
                        <option value="">Select Your City/District</option>
                        @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="about_us" class="form-label">Tagline</label>
                        <input type="text" name="about_us" id="about_us" placeholder="Title that best defines you.."
                            required />
                    </div>
                    <!--  <div class="form-radio">
                        <label for="gender" class="form-label">Gender</label>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" value="male" id="male" checked="checked" />
                            <label for="male">Male</label>

                            <input type="radio" name="gender" value="female" id="female" />
                            <label for="female">Female</label>
                        </div>
                    </div> -->

                    <div class="form-textarea">
                        <label for="about_us" class="form-label">About Me</label>
                        <textarea name="about_us" id="about_us" minlength="50" maxlength="200"
                            placeholder="Minimum of 50 characters that describes your talents, skills and interests"
                            required /></textarea>
                    </div>
                </div>

                <div class="fieldset-footer">
                    <span>Step 2 of 3</span>
                </div>

            </fieldset>

            <h3>
                <span class="title_text">Choose Your Profile</span>
            </h3>
            <fieldset>
                <div class="fieldset-content">

                    <div class="plans150 offset-xl-1">
                        <div class="row justify-content-md-center">
                            <div class="col-lg-5 col-md-4">
                                <div class="plan_item">
                                    <div class="plan_icon1">
                                        <div class="cfp_icon">
                                            <img src="/images/cp_icon.svg" alt="">
                                        </div>
                                    </div>
                                    <h4>Freelancer</h4>
                                    <div class="plan_price1">
                                        <span>Start a Freelancer Profile</span>
                                    </div>
                                    <ul class="plan_dt1">
                                        <li>
                                            <p>01. Phasellus ac vulputate erat, sit amet tristique elit.</p>
                                        </li>
                                        <li>
                                            <p>2. Ut sed ex nec tellus fermentum rhoncus et eget massa. Pellentesque sit
                                                amet felis nec nulla imperdiet varius.</p>
                                        </li>
                                    </ul>
                                    <div class="plan_btn">
                                        <button type="submit" name="role_id" value="1">Signup as a Freelancer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4">
                                <div class="plan_item">
                                    <div class="plan_icon1">
                                        <div class="cfp_icon">
                                            <img src="/images/fp_icon.svg" alt="">
                                        </div>
                                    </div>
                                    <h4>Employer</h4>
                                    <div class="plan_price1">
                                        <span>Start an Employer Profile</span>
                                    </div>
                                    <ul class="plan_dt1">
                                        <li>
                                            <p>01. Phasellus ac vulputate erat, sit amet tristique elit.</p>
                                        </li>
                                        <li>
                                            <p>2. Ut sed ex nec tellus fermentum rhoncus et eget massa. Pellentesque sit
                                                amet felis nec nulla imperdiet varius.</p>
                                        </li>
                                    </ul>
                                    <div class="plan_btn">
                                        <button type="submit" name="role_id" value="2">Signup as an Employer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fieldset-footer">
                    <span>Step 3 of 3</span>
                </div>
            </fieldset>
        </form>
    </div>

</div>

@endsection