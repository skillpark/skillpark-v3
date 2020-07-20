@extends('layouts.profilemaster')

@section('content')

<div class="dashboard-content-container" data-simplebar>
    <div class="dashboard-content-inner">
        <div class="col-xl-9 col-lg-12 content-left-offset" style="padding: 0;">
            <form method="POST" enctype="multipart/form-data" action="{{ route('editprofile') }}">
                @csrf
                <!-- Dashboard Box -->
                <div class="col-xl-12 padding-left-0 padding-right-0">
                    <div class="dashboard-box margin-top-0">
                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
                        </div>
                        <div class="content with-padding padding-bottom-0">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
                                        <img class="profile-pic" src="{{auth()->user()->avatar}}" alt="" />
                                        <div class="upload-button"></div>
                                        <input class="file-upload" type="file" accept="image/*" />
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="row">

                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <h5>Name</h5>
                                                <input type="text" class="with-border" value="{{auth()->user()->name}}">
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <!-- Account Type -->
                                            <div class="submit-field">
                                                <h5>Account Type</h5>
                                                <div class="account-type">

                                                    <div>
                                                        <input type="radio" name="role_id" value="2" id="freelancer-radio" class="account-type-radio" checked />
                                                        <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i>
                                                            Freelancer</label>
                                                    </div>

                                                    <div>
                                                        <input type="radio" name="role_id" value="3" id="employer-radio" class="account-type-radio" />
                                                        <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i>
                                                            Employer</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <h5>Email </h5>
                                                <div title="Registered Email cannot be changed." data-tippy-placement="top">
                                                    <input type="email" style="border-color:#0bb744;" class="with-border" value="{{auth()->user()->email}}" disabled>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Dashboard Box -->
                <div class="col-xl-12 padding-left-0 padding-right-0">
                    <div class="dashboard-box">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-material-outline-face"></i> My Profile</h3>
                        </div>
                        <div class="content">
                            <ul class="fields-ul">
                                <li>
                                    <div class="row">

                                        <div class="col-xl-6">
                                            <div class="submit-field">
                                                <h5>Skills <i class="help-icon" data-tippy-placement="right" title="Add up to 10 skills"></i></h5>

                                                <!-- Skills List -->
                                                <div class="keywords-container">
                                                    <div class="keyword-input-container">
                                                        <input type="text" class="keyword-input with-border" placeholder="e.g. Angular, Laravel" />
                                                        <button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
                                                    </div>
                                                    <div class="keywords-list">
                                                        <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Angular</span></span>
                                                        <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Vue JS</span></span>
                                                        <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">iOS</span></span>
                                                        <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Android</span></span>
                                                        <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Laravel</span></span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="submit-field">
                                                <h5>Attachments</h5>

                                                <!-- Attachments -->
                                                <div class="attachments-container margin-top-0 margin-bottom-0">
                                                    <div class="attachment-box ripple-effect">
                                                        <span>Cover Letter</span>
                                                        <i>PDF</i>
                                                        <button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
                                                    </div>
                                                    <div class="attachment-box ripple-effect">
                                                        <span>Contract</span>
                                                        <i>DOCX</i>
                                                        <button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>

                                                <!-- Upload Button -->
                                                <div class="uploadButton margin-top-0">
                                                    <input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple />
                                                    <label class="uploadButton-button ripple-effect" for="upload">Upload
                                                        Files</label>
                                                    <span class="uploadButton-file-name">Maximum file size: 5 MB</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">

                                        <div class="col-xl-6">
                                            <div class="submit-field">
                                                <h5>Tagline</h5>
                                                <input type="text" class="with-border" value="Laravel Web Developer">
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="submit-field">
                                                <h5>City</h5>
                                                <select name="city_id" class="selectpicker with-border" data-size="5" title="{{ Auth::user()->city }}" data-live-search="true" required>
                                                    @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <h5>Introduce Yourself</h5>
                                                <textarea cols="30" rows="5" class="with-border">{{ auth()->user()->about }}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Box -->
                <div class="col-xl-12 padding-left-0 padding-right-0">
                    <div id="test1" class="dashboard-box">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
                        </div>

                        <div class="content with-padding">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Current Password</h5>
                                        <input type="password" class="with-border">
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>New Password</h5>
                                        <input type="password" class="with-border">
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Repeat New Password</h5>
                                        <input type="password" class="with-border">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="col-xl-12 padding-left-0 padding-right-0">
                    <button class="button ripple-effect big margin-top-10" type="submit">{{ __('Save Changes') }}</button>
                </div>
            </form>
            <div class="dashboard-footer-spacer"></div>
            <div class="small-footer margin-top-15">
                <div class="small-footer-copyrights">
                    © 2020 <strong>SKILLPARK</strong>. All Rights Reserved.
                </div>
                <ul class="footer-social-links">
                    <li>
                        <a href="#" title="Facebook" data-tippy-placement="top">
                            <i class="icon-brand-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Twitter" data-tippy-placement="top">
                            <i class="icon-brand-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Google Plus" data-tippy-placement="top">
                            <i class="icon-brand-google-plus-g"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="LinkedIn" data-tippy-placement="top">
                            <i class="icon-brand-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Footer / End -->


        </div>

    </div>
    <!-- Row / End -->

</div>

<script>
    document.title = '{{ Auth::user()->name }} | Account Settings';
</script>

@endsection