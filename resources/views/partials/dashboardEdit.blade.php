@extends('layouts.app')
@section('content')

    <div class="px-5 mt-4">
        <div class="tabs-card d-flex">
            <div class="nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="subscribersGrowth-tab" data-bs-toggle="pill"
                    data-bs-target="#subscribersGrowth" type="button" role="tab">Subscribers Growth</button>
                <button class="nav-link" id="performanceMetrics-tab" data-bs-toggle="pill"
                    data-bs-target="#performanceMetrics" type="button" role="tab">Performance Metrics</button>
                <button class="nav-link" id="activities-tab" data-bs-toggle="pill" data-bs-target="#activities"
                    type="button" role="tab">Activities</button>
                <button class="nav-link" id="RecentActivity-tab" data-bs-toggle="pill" data-bs-target="#RecentActivity"
                    type="button" role="tab">Recent Activity</button>
            </div>

            <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

            <div class="tab-content tab-wrapper" id="v-pills-tabContent">

                <div class="tab-pane fade show active" id="subscribersGrowth" role="tabpanel">
                    <div>
                        <div class="d-flex justify-content-between">
                            <p class="settings-title"> Subscribers Growth</p>
                            <select name="months" id="" class="custom-select-multiple-trigger">
                                <option value="january" selected disabled>january</option>
                                <option value="february">february</option>
                                <option value="march">march</option>
                                <option value="april">april</option>
                                <option value="may">may</option>
                                <option value="june">june</option>
                                <option value="july">july</option>
                                <option value="august">august</option>
                                <option value="september">september</option>
                                <option value="october">october</option>
                                <option value="november">november</option>
                                <option value="december">december</option>
                            </select>
                        </div>
                        <hr> <br>

                        <form action="">
                            <div class="d-flex px-4 row">
                                <div class="col-lg-6">
                                    <label for="" class="input-text">Total Subscriber </label>
                                    <input type="text" class="form-control" placeholder="300">
                                </div>

                                <div class="col-lg-6">
                                    <label for="" class="input-text">Active Subscriber </label>
                                    <input type="text" class="form-control" placeholder="150">
                                </div>
                            </div> <br>
                            <div class="d-flex px-4 row">
                                <div class="col-lg-6">
                                    <label for="" class="input-text">New Registrations</label>
                                    <input type="text" class="form-control" placeholder="140">
                                </div>

                                <div class="col-lg-6">
                                    <label for="" class="input-text">Downloads </label>
                                    <input type="text" class="form-control" placeholder="80">
                                </div>
                            </div> <br>

                        </form> <br>
                        <div class="d-flex justify-content-end ">
                            <button class="btn-primary">Save Changes </button>
                        </div>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

                <div class="tab-pane fade " id="performanceMetrics" role="tabpanel">
                    <p> <span class="settings-title">Performance Metrics </span>
                        <hr>
                    </p><br>
                    <div class="px-4">
                        <form action="">
                            <div class="d-flex row">
                                <div class="col-lg-6">
                                    <label for="" class="input-text">Engagement Rate </label>
                                    <input type="text" class="form-control" placeholder="30%">
                                </div>

                                <div class="col-lg-6">
                                    <label for="" class="input-text">Content Popularity </label>
                                    <input type="text" class="form-control" placeholder="15%">
                                </div>
                            </div> <br>
                            <div class="d-flex row">
                                <div class="col-lg-6">
                                    <label for="" class="input-text">User Retention</label>
                                    <input type="text" class="form-control" placeholder="14%">
                                </div>

                                <div class="col-lg-6">
                                    <label for="" class="input-text">Conversion Rate </label>
                                    <input type="text" class="form-control" placeholder="50%">
                                </div>
                            </div> <br>
                        </form> <br>

                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn-primary">Save Changes</button>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

                <div class="tab-pane fade " id="activities" role="tabpanel">
                    <p> <span class="settings-title"> Activities</span><br>
                    </p>
                    <hr> <br>
                    <div class="px-4">
                        <form action="">
                            <div class="d-flex row">
                                <div class="col-lg-6">
                                    <label for="" class="input-text">Login Activities</label>
                                    <input type="text" class="form-control" placeholder="30%">
                                </div>

                                <div class="col-lg-6">
                                    <label for="" class="input-text">Content Views</label>
                                    <input type="text" class="form-control" placeholder="15%">
                                </div>
                            </div> <br>
                            <div class="d-flex row">
                                <div class="col-lg-6">
                                    <label for="" class="input-text">Downloads</label>
                                    <input type="text" class="form-control" placeholder="14%">
                                </div>

                                <div class="col-lg-6">
                                    <label for="" class="input-text">Event Registration </label>
                                    <input type="text" class="form-control" placeholder="50%">
                                </div>
                            </div> <br>
                        </form> <br>

                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn-primary">Save Changes</button>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

                <div class="tab-pane fade " id="RecentActivity" role="tabpanel">
                    <p> <span class="settings-title">Recent Activity</span><br>
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

            </div>
        </div>
    </div>

@endsection