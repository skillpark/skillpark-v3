@extends('layouts.security')

@section('content')
<style>
    body,
    html {
        scroll-behavior: smooth;
    }
</style>


<div class="container">
    <div class="row" style="margin-top:20px;">
        <div class="col-xl-6 offset-xl-3">

            <div class="login-register-page">
                <!-- Welcome Text -->
                <p style="font-size: 16px;">Hello <strong>{{ Auth::user()->name }},</strong></p>

                <div class="welcome-text">
                    <h3 style="font-size: 20px;">Just a Few More Informations</h3>
                </div>

                <form method="POST" action="{{ route('addinformation') }}">
                    @csrf
                    <!-- Account Type -->
                    <p>What do you wanna act as? <a href="#rolesinfo">(Learn More)</a></p>

                    @error('role')
                    <span class="feedback" style="color: red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="account-type">
                        <div>
                            <input type="radio" name="role_id" value="1" id="freelancer-radio" class="account-type-radio" checked />
                            <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Freelancer</label>
                        </div>

                        <div>
                            <input type="radio" name="role_id" value="2" id="employer-radio" class="account-type-radio" />
                            <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Employer</label>
                        </div>
                    </div>

                    <!-- Form -->
                    <p>Write Something about Yourself <i class="help-icon" data-tippy-placement="top" data-tippy-theme="dark" title="Minimum 50 characters required."></i></p>
                    @error('about')
                    <span class="feedback" style="color: red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input">
                        <textarea rows="6" cols="12" maxlength="200" minlength="50" class="input-text with-border" name="about" placeholder="Write about your skills, interests, hobbies..." required>{{ Auth::user()->about }}</textarea>
                    </div>

                    <p>Where are you from? <i class="help-icon" data-tippy-placement="right" data-tippy-theme="dark" title="Your district or City."></i></p>
                    @error('city_id')
                    <span class="feedback" style="color: red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="sidebar-widget">
                        <select name="city_id" class="selectpicker with-border" data-size="5" title="Select Your City" data-live-search="true" required>
                            @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit">{{ __('Continue To Skillpark') }} <i class="icon-material-outline-arrow-right-alt"></i></button>
                </form>
                <div id="rolesinfo"></div>
                <div class="margin-top-60"></div>

                <div class="social-login-separator"></div>

                <div class="margin-top-95"></div>

                <div class="col-xl-12">

                    <div class="pricing-plans-container">
                        <div class="pricing-plan recommended">
                            <div class="recommended-badge">Roles Information</div>
                            <div class="billing-cycle-radios margin-bottom-20">
                                <div class="radio billed-monthly-radio">
                                    <input id="radio-5" name="radio-payment-type" type="radio" checked>
                                    <label for="radio-5"><span class="radio-label"></span> Freelancers</label>
                                </div>

                                <div class="radio billed-yearly-radio">
                                    <input id="radio-6" name="radio-payment-type" type="radio">
                                    <label for="radio-6"><span class="radio-label"></span> Employers</label>
                                </div>
                            </div>

                            <div class="pricing-plan-label billed-monthly-label">
                                <h3 class="margin-top-10 margin-bottom-20">Freelancers completes submitted Jobs and
                                    Projects.</h3>

                                <div class="pricing-plan-features">
                                    <p style="font-weight: 900; font-size:16px;">Features of Freelancing:</p>
                                    <ul style="color:#686868; font-weight:400">
                                        <li>Jobs Search</li>
                                        <li>Open Bidding for Projects</li>
                                        <li>Proposal Display</li>
                                        <li>Category and Skills</li>
                                        <li>Simplified Payment System</li>
                                        <li>Verified National Payment Gateway</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="pricing-plan-label billed-yearly-label">
                                <h3 class="margin-top-10 margin-bottom-20">Employers submit the projects required for
                                    completion.</h3>
                                <div class="pricing-plan-features">
                                    <p style="font-weight: 900; font-size:16px;">Features of Hiring:</p>
                                    <ul style="color:#686868; font-weight:400">
                                        <li>Freelancers Listings</li>
                                        <li>Request by Skilled Resources</li>
                                        <li>Fast and Relaible Verified Users</li>
                                        <li>Category and Skills</li>
                                        <li>Simplified Payment System</li>
                                        <li>Verified National Payment Gateway</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Spacer -->
<div class="margin-top-20"></div>
<!-- Spacer / End-->


@endsection