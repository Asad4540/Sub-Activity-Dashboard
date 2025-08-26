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
                <button class="nav-link" id="conversionFunnel-tab" data-bs-toggle="pill" data-bs-target="#conversionFunnel"
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
                        <hr><br>
                        <form action="">
                            <div class="d-flex px-4 row align-items-end">
                                <div class="col-lg-2">
                                    <label for="" class="input-text hot">Hot</label>
                                </div>

                                <div class="col-lg-5">
                                    <label for="" class="input-text">Percentage rate </label>
                                    <input type="text" class="form-control" placeholder="250">
                                </div>
                                <div class="col-lg-5 ">
                                    <label for="" class="input-text">Score Range</label>
                                    <input type="text" class="form-control" placeholder="150">
                                </div>
                            </div> <br>

                            <div class="d-flex px-4 row align-items-end">
                                <div class="col-lg-2">
                                    <label for="" class="input-text warm">Warm</label>
                                </div>

                                <div class="col-lg-5">
                                    <label for="" class="input-text">Percentage rate </label>
                                    <input type="text" class="form-control" placeholder="250">
                                </div>
                                <div class="col-lg-5 ">
                                    <label for="" class="input-text">Score Range</label>
                                    <input type="text" class="form-control" placeholder="150">
                                </div>
                            </div> <br>

                            <div class="d-flex px-4 row align-items-end">
                                <div class="col-lg-2">
                                    <label for="" class="input-text cold">Cold</label>
                                </div>

                                <div class="col-lg-5">
                                    <label for="" class="input-text">Percentage rate </label>
                                    <input type="text" class="form-control" placeholder="250">
                                </div>
                                <div class="col-lg-5 ">
                                    <label for="" class="input-text">Score Range</label>
                                    <input type="text" class="form-control" placeholder="150">
                                </div>
                            </div> <br>

                        </form> <br>
                        <div class="d-flex justify-content-end">
                            <button class="btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

                <div class="tab-pane fade " id="topInterests" role="tabpanel">
                    <p><span class="settings-title">Top Interest</span><br></p>
                    <hr>
                    <div class="px-4 d-flex">
                        <div class="col-lg-4 mb-2">
                            <label class="input-text">Category</label>
                        </div>
                        <div class="col-lg-4">
                            <label class="input-text">Percentage</label>
                        </div>
                        <div class="col-lg-2 align-items-end">
                            <label class="input-text">Delete</label><br>
                        </div>
                    </div>
                    <div class="px-4" id="interestContainer">
                        <div class="d-flex row interest-row">
                            <div class="col-lg-4 mb-2">
                                <input type="text" class="form-control" placeholder="Artificial Intelligence">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="1500">
                            </div>
                            <div class="col-lg-2 align-items-end">
                                <i class="bi bi-x-square text-danger delete-row" style="cursor:pointer"></i>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn-secondary" onclick="addInterestRow()">Add</button>
                        <button type="button" class="btn-primary">Save Changes</button>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->


                <div class="tab-pane fade " id="engagementMetrics" role="tabpanel">
                    <p> <span class="settings-title"> Engagement Metrics</span><br>
                    </p>
                    <hr><br>
                    <div class="px-4">
                        <form action="">
                            <div class="d-flex row">
                                <div class="col-lg-6">
                                    <label for="" class="input-text"> Articles </label>
                                    <input type="text" class="form-control" placeholder="30%">
                                </div>

                                <div class="col-lg-6">
                                    <label for="" class="input-text">Time spent </label>
                                    <input type="text" class="form-control" placeholder="15%">
                                </div>
                            </div> <br>
                            <div class="d-flex row">
                                <div class="col-lg-6">
                                    <label for="" class="input-text">Downloads </label>
                                    <input type="text" class="form-control" placeholder="14%">
                                </div>

                                <div class="col-lg-6">
                                    <label for="" class="input-text"> Repeat Visit </label>
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

                <div class="tab-pane fade " id="conversionFunnel" role="tabpanel">
                    <p> <span class="settings-title">Conversion Funnel</span><br>
                    </p>
                    <hr><br>
                    <div class="px-4 d-flex">
                        <div class="col-lg-3 mb-2">
                            <label class="settings-title">TITLE</label>
                        </div>
                        <div class="col-lg-4">
                            <label class="settings-title">USERS</label>
                        </div>
                        <div class="col-lg-2 align-items-end">
                            <label class="settings-title">% OF PREVIOUS</label><br>
                        </div>
                    </div><br>
                    <div class="px-4">
                        <div class="d-flex row ">
                            <div class="col-lg-2 align-items-end">
                                <label for="" class="input-text ">View</label>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <input type="text" class="form-control" placeholder="10,000">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="47%">
                            </div>
                        </div>
                        <div class="d-flex row ">
                            <div class="col-lg-2 align-items-end">
                                <label for="" class="input-text ">Engage</label>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <input type="text" class="form-control" placeholder="6,500">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="35%">
                            </div>
                        </div>
                        <div class="d-flex row ">
                            <div class="col-lg-2 align-items-end">
                                <label for="" class="input-text ">Interact</label>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <input type="text" class="form-control" placeholder="5,000">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="47%">
                            </div>
                        </div>
                        <div class="d-flex row ">
                            <div class="col-lg-2 align-items-end">
                                <label for="" class="input-text ">Convert</label>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <input type="text" class="form-control" placeholder="1260">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="17%
">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-end gap-2">

                        <button type="button" class="btn-primary">Save Changes</button>
                    </div>
                </div>

                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

                <div class="tab-pane fade " id="audienceGrowth" role="tabpanel">
                    <p> <span class="settings-title">Audience Growth</span><br>
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

@push('scripts')
    <script>
        function addInterestRow() {
            let container = document.getElementById("interestContainer");
            let newRow = document.createElement("div");
            newRow.classList.add("d-flex", "row", "interest-row");

            newRow.innerHTML = `<div class="col-lg-4">
                                                <input type="text" class="form-control mt-2 mb-2" placeholder="Artificial Intelligence">
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control mt-2 mb-2" placeholder="2000">
                                                </div>
                                                <div class="col-lg-2 align-items-end">
                                                    <i class="bi bi-x-square text-danger delete-row mt-2 mb-2" style="cursor:pointer"></i>
                                            </div>`;

            container.appendChild(newRow);

            // attach delete event
            newRow.querySelector(".delete-row").addEventListener("click", function () {
                newRow.remove();
            });
        }

        // Attach delete event to existing rows
        document.querySelectorAll(".delete-row").forEach(icon => {
            icon.addEventListener("click", function () {
                this.closest(".interest-row").remove();
            });
        });
    </script>
@endpush