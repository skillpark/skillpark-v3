@extends('layouts.profilemaster')

@section('content')

<div class="dashboard-content-container" data-simplebar>
    <div class="dashboard-content-inner">
        <div class="col-xl-9" style="padding: 0;">
            <div class="dashboard-headline" style="margin-top: 20px;">
                <h3>Hello, {{ Auth::user()->name }}</h3>
                <span>We are glad to see you again!</span>
            </div>

            <div class="fun-facts-container">
                <div class="fun-fact" data-fun-fact-color="#36bd78">
                    <div class="fun-fact-text">
                        <span>Task Bids Won</span>
                        <h4>22</h4>
                    </div>
                    <div class="fun-fact-icon"><i class="icon-material-outline-gavel"></i></div>
                </div>
                <div class="fun-fact" data-fun-fact-color="#b81b7f">
                    <div class="fun-fact-text">
                        <span>Jobs Applied</span>
                        <h4>4</h4>
                    </div>
                    <div class="fun-fact-icon"><i class="icon-material-outline-business-center"></i></div>
                </div>
                <div class="fun-fact" data-fun-fact-color="#efa80f">
                    <div class="fun-fact-text">
                        <span>Reviews</span>
                        <h4>28</h4>
                    </div>
                    <div class="fun-fact-icon"><i class="icon-material-outline-rate-review"></i></div>
                </div>

                <!-- Last one has to be hidden below 1600px, sorry :( -->
                <div class="fun-fact" data-fun-fact-color="#2a41e6">
                    <div class="fun-fact-text">
                        <span>This Month Views</span>
                        <h4>987</h4>
                    </div>
                    <div class="fun-fact-icon"><i class="icon-feather-trending-up"></i></div>
                </div>
            </div>

            <!-- Row -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="dashboard-box child-box-in-row">
                        <div class="headline">
                            <h3><i class="icon-material-outline-note-add"></i> Notes</h3>
                        </div>

                        <div class="content with-padding">
                            <!-- Note -->
                            <div class="dashboard-note">
                                <p>Meeting with candidate at 3pm who applied for Bilingual Event Support Specialist</p>
                                <div class="note-footer">
                                    <span class="note-priority high">High Priority</span>
                                    <div class="note-buttons">
                                        <a href="#" title="Edit" data-tippy-placement="top"><i
                                                class="icon-feather-edit"></i></a>
                                        <a href="#" title="Remove" data-tippy-placement="top"><i
                                                class="icon-feather-trash-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Note -->
                            <div class="dashboard-note">
                                <p>Extend premium plan for next month</p>
                                <div class="note-footer">
                                    <span class="note-priority low">Low Priority</span>
                                    <div class="note-buttons">
                                        <a href="#" title="Edit" data-tippy-placement="top"><i
                                                class="icon-feather-edit"></i></a>
                                        <a href="#" title="Remove" data-tippy-placement="top"><i
                                                class="icon-feather-trash-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-note-button">
                            <a href="#small-dialog"
                                class="popup-with-zoom-anim button full-width button-sliding-icon">Add
                                Note <i class="icon-material-outline-arrow-right-alt"></i></a>
                        </div>
                    </div>
                    <!-- Dashboard Box / End -->
                </div>

                <!-- Dashboard Box -->
                <div class="col-xl-6">
                    <div class="dashboard-box">
                        <div class="headline">
                            <h3><i class="icon-material-baseline-notifications-none"></i> Notifications</h3>
                            <button class="mark-as-read ripple-effect-dark" data-tippy-placement="left"
                                title="Mark all as read">
                                <i class="icon-feather-check-square"></i>
                            </button>
                        </div>
                        <div class="content">
                            <ul class="dashboard-box-list">
                                <li>
                                    <span class="notification-icon"><i
                                            class="icon-material-outline-autorenew"></i></span>
                                    <span class="notification-text">
                                        Your job listing <a href="#">Full Stack Software Engineer</a> is expiring
                                    </span>
                                    <!-- Buttons -->
                                    <div class="buttons-to-right">
                                        <a href="#" class="button ripple-effect ico" title="Mark as read"
                                            data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
                                    <span class="notification-text">
                                        <strong>Client User 2</strong> placed a bid on your <a href="#">iOS App
                                            Development</a> project
                                    </span>
                                    <!-- Buttons -->
                                    <div class="buttons-to-right">
                                        <a href="#" class="button ripple-effect ico" title="Mark as read"
                                            data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                    <span class="notification-text">
                                        <strong>Freelancer User</strong> applied for a job <a href="#">Full Stack
                                            Software
                                            Engineer</a>
                                    </span>
                                    <!-- Buttons -->
                                    <div class="buttons-to-right">
                                        <a href="#" class="button ripple-effect ico" title="Mark as read"
                                            data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <span class="notification-icon"><i
                                            class="icon-material-outline-rate-review"></i></span>
                                    <span class="notification-text">
                                        <strong>Client User</strong> left you a <span class="star-rating no-stars"
                                            data-rating="5.0"></span> rating after finishing <a href="#">Logo Design</a>
                                        task
                                    </span>
                                    <!-- Buttons -->
                                    <div class="buttons-to-right">
                                        <a href="#" class="button ripple-effect ico" title="Mark as read"
                                            data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
    <!--Tabs -->
    <div class="sign-in-form">

        <ul class="popup-tabs-nav">
            <li><a href="#tab">Add Note</a></li>
        </ul>

        <div class="popup-tabs-container">

            <!-- Tab -->
            <div class="popup-tab-content" id="tab">

                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>Do Not Forget</h3>
                </div>

                <!-- Form -->
                <form method="post" id="add-note">

                    <select class="selectpicker with-border default margin-bottom-20" data-size="7" title="Priority">
                        <option>Low Priority</option>
                        <option>High Priority</option>
                    </select>

                    <textarea name="textarea" cols="10" placeholder="Note" class="with-border"></textarea>

                </form>

                <!-- Button -->
                <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="add-note">Add
                    Note <i class="icon-material-outline-arrow-right-alt"></i></button>

            </div>

        </div>
    </div>
</div>
<!-- Add Notes popup / End -->


<script>
document.title = '{{ Auth::user()->name }} | Dashboard';
</script>

@endsection