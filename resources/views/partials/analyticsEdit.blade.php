@extends('layouts.app')
@section('content')

    <div class="px-5 mt-4">
        <div class="tabs-card d-flex">
            <div class="nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="engagement" data-bs-toggle="pill" data-bs-target="#engagementScore"
                    type="button" role="tab">Engagement Score</button>
                <button class="nav-link" id="topInterests-tab" data-bs-toggle="pill" data-bs-target="#topInterests"
                    type="button" role="tab">Top Interests</button>
                <button class="nav-link" id="engagementMetrics-tab" data-bs-toggle="pill"
                    data-bs-target="#engagementMetrics" type="button" role="tab">Engagement Metrics</button>
                <button class="nav-link" id="converionLeads-tab" data-bs-toggle="pill" data-bs-target="#converionLeads"
                    type="button" role="tab">Conversion Leads</button>
                <button class="nav-link" id="leads-tab" data-bs-toggle="pill" data-bs-target="#leads" type="button"
                    role="tab">Leads</button>
                <button class="nav-link" id="audienceGrowth-tab" data-bs-toggle="pill" data-bs-target="#audienceGrowth"
                    type="button" role="tab">Audience Growth</button>

            </div>

            <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

            <div class="tab-content tab-wrapper" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="engagementScore" role="tabpanel">
                    <div>
                        <p> <span class="settings-title">Engagement Score</span><br>
                        </p><br>

                        <form action="">
                            <div class="d-flex px-4 row">
                                <div class="col-6">
                                    <label for="" class="input-text">First Name </label>
                                    <input type="text" class="form-control" placeholder="Royston">
                                </div>

                                <div class="col-6">
                                    <label for="" class="input-text">Last Name </label>
                                    <input type="text" class="form-control" placeholder="fernandez">
                                </div>
                            </div> <br>
                            <div class="d-flex px-4 row">
                                <div class="col-6">
                                    <label for="" class="input-text">Email</label>
                                    <input type="text" class="form-control" placeholder="Roy.fernandez@gmai.com">
                                </div>

                                <div class="col-6">
                                    <label for="" class="input-text">Phone Number </label>
                                    <input type="text" class="form-control" placeholder="+1 (256) 5684">
                                </div>
                            </div> <br>
                            <div class="d-flex px-4 row">
                                <div class="col-6">
                                    <label for="" class="input-text">Company </label>
                                    <input type="text" class="form-control" placeholder="Vereigen Media">
                                </div>

                                <div class="col-6">
                                    <label for="" class="input-text">Job Designation</label>
                                    <input type="text" class="form-control" placeholder="marketing manager">
                                </div>
                            </div> <br>
                        </form> <br>
                        <div class="d-flex justify-content-end ">
                            <button class="btn-primary">Save Changes </button>
                        </div>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

                <div class="tab-pane fade " id="topInterests" role="tabpanel">
                    <p> <span class="settings-title"> Top Interests</span><br>
                    </p><br>
                    <div class="px-4">

                        <form action="" class="mb-3">
                            <label for="" class="input-text">Current Password </label>
                            <input type="text" class="form-control" style="width:40.5%"> <br>
                            <div class="d-flex gap-4 row">
                                <div class="col-5">
                                    <label for="" class="input-text">New Password </label>
                                    <input type="text" class="form-control w-100">
                                </div>

                                <div class="col-5">
                                    <label for="" class="input-text">Confirm New Password </label>
                                    <input type="text" class="form-control w-100">
                                </div>
                            </div>
                        </form>
                        <p class="password-text">Password must be at least 8 characters and include a number, uppercase
                            letter, and special
                            character. </p> <br>
                        <div class="d-flex gap-3 align-middle">
                            <p class="input-text">Two-Factor Authentication</p>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div><br>
                        <p class="password-text">Enhancing Digital Security by Requiring Both a Password and a Secondary
                            Verification Method to <br> Confirm User Identity and Prevent Unauthorized Access.</p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn-primary">Update Password </button>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->


                <div class="tab-pane fade " id="engagementMetrics" role="tabpanel">
                    <p> <span class="settings-title"> placeholder</span><br>
                    </p><br>
                    <div class="px-4">

                        <p>Demo</p>

                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn-primary">Update Password </button>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

                <div class="tab-pane fade " id="converionLeads" role="tabpanel">
                    <p> <span class="settings-title"> placeholder</span><br>
                    </p><br>
                    <div class="px-4">

                        <p>Demo</p>

                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn-primary">Update Password </button>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

                <div class="tab-pane fade " id="leads" role="tabpanel">
                    <p> <span class="settings-title"> placeholder</span><br>
                    </p><br>
                    <div class="px-4">

                        <p>Demo</p>

                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn-primary">Update Password </button>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

                <div class="tab-pane fade " id="audienceGrowth" role="tabpanel">
                    <p> <span class="settings-title"> placeholder</span><br>
                    </p><br>
                    <div class="px-4">

                        <p>Demo</p>

                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn-primary">Update Password </button>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->


            </div>
        </div>
    </div>

@endsection