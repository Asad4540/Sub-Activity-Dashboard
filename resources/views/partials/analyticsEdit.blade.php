@extends('layouts.app')
@section('content')

    <div class="px-5 mt-4">
        <div class="tabs-card d-flex">
            <div class="nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="subscribers-tab" data-bs-toggle="pill" data-bs-target="#subscribers"
                    type="button" role="tab">Subscribers</button>
                <button class="nav-link" id="engagement" data-bs-toggle="pill" data-bs-target="#engagementScore"
                    type="button" role="tab">Engagement Score</button>
                <button class="nav-link" id="topInterests-tab" data-bs-toggle="pill" data-bs-target="#topInterests"
                    type="button" role="tab">Top Interests</button>
                <button class="nav-link" id="engagementMetrics-tab" data-bs-toggle="pill"
                    data-bs-target="#engagementMetrics" type="button" role="tab">Engagement Metrics</button>
                <button class="nav-link" id="converionLeads-tab" data-bs-toggle="pill" data-bs-target="#converionLeads"
                    type="button" role="tab">Conversion Funnel</button>
                <button class="nav-link" id="audienceGrowth-tab" data-bs-toggle="pill" data-bs-target="#audienceGrowth"
                    type="button" role="tab">Audience Growth</button>
                <button class="nav-link" id="trafficSources-tab" data-bs-toggle="pill" data-bs-target="#trafficSources"
                    type="button" role="tab">Top Traffic</button>

            </div>

            <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

            <div class="tab-content tab-wrapper" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="subscribers" role="tabpanel">
                    <div>
                        <p> <span class="settings-title">Subscribers</span>
                        </p>
                        <hr><br>

                        <form action="">
                            <div class="d-flex px-4 row">
                                <div class="col-lg-6">
                                    <label for="" class="input-text">Total Subscriber </label>
                                    <input type="text" class="form-control" placeholder="500">
                                </div>

                                <div class="col-lg-6">
                                    <label for="" class="input-text">Active Subscriber </label>
                                    <input type="text" class="form-control" placeholder="250">
                                </div>
                            </div> <br>
                            <div class="d-flex px-4 row">
                                <div class="col-lg-6">
                                    <label for="" class="input-text">New Registrations</label>
                                    <input type="text" class="form-control" placeholder="150">
                                </div>

                                <div class="col-lg-6">
                                    <label for="" class="input-text">Downloads </label>
                                    <input type="text" class="form-control" placeholder="90">
                                </div>
                            </div> <br>
                            <div class="d-flex px-4 row">
                                <div class="col-lg-6">
                                    <label for="" class="input-text">Conversion Rate</label>
                                    <input type="text" class="form-control" placeholder="15%">
                                </div>
                            </div> <br>

                        </form> <br>
                        <div class="d-flex justify-content-end ">
                            <button class="btn-primary">Save Changes </button>
                        </div>
                    </div>
                </div>
                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

                <div class="tab-pane fade" id="engagementScore" role="tabpanel">
                    <div>
                        <p> <span class="settings-title">Engagement Score</span><br>
                        </p>
                        <hr>
                        <div class="px-4">

                            <p>Demo</p>

                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

                <div class="tab-pane fade " id="topInterests" role="tabpanel">
                    <p> <span class="settings-title">Top Interests</span><br>
                    </p>
                    <hr>
                    <div class="px-4">

                        <p>Demo</p>

                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn-primary">Save Changes</button>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->


                <div class="tab-pane fade " id="engagementMetrics" role="tabpanel">
                    <p> <span class="settings-title"> placeholder</span><br>
                    </p>
                    <hr><br>
                    <div class="px-4">

                        <p>Demo</p>

                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn-primary">Save Changes</button>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

                <div class="tab-pane fade " id="converionLeads" role="tabpanel">
                    <p> <span class="settings-title"> placeholder</span><br>
                    </p>
                    <hr><br>
                    <div class="px-4">

                        <p>Demo</p>

                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn-primary">Save Changes</button>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

                <div class="tab-pane fade " id="audienceGrowth" role="tabpanel">
                    <p> <span class="settings-title"> placeholder</span><br>
                    </p>
                    <hr><br>
                    <div class="px-4">

                        <p>Demo</p>

                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn-primary">Save Changes</button>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

                <div class="tab-pane fade " id="trafficSources" role="tabpanel">
                    <p> <span class="settings-title">Top Traffic</span>
                        <hr>
                    </p><br>
                    <div class="px-4">
                        <form action="">
                            <div class="d-flex row">
                                <div class="col-lg-6">
                                    <label for="" class="input-text">Direct</label>
                                    <input type="text" class="form-control" placeholder="300">
                                </div>

                                <div class="col-lg-6">
                                    <label for="" class="input-text">Organic</label>
                                    <input type="text" class="form-control" placeholder="150">
                                </div>
                            </div> <br>
                            <div class="d-flex row">
                                <div class="col-lg-6">
                                    <label for="" class="input-text">Social</label>
                                    <input type="text" class="form-control" placeholder="145">
                                </div>

                                <div class="col-lg-6">
                                    <label for="" class="input-text">Referral </label>
                                    <input type="text" class="form-control" placeholder="500">
                                </div>
                            </div> <br>
                        </form> <br>

                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn-primary">Save Changes</button>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->


            </div>
        </div>
    </div>

@endsection