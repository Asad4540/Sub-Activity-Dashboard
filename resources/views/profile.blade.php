@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-end gap-2 mb-3">
            <button class="btn-secondary" style="padding:0 !important">Export &nbsp;<i class="bi bi-arrow-down-square"
                    style="color:var(--btn-primary-color)"></i></button>
            <button class="btn-primary" onclick="window.location.href='{{ route('profileEdit') }}'">Edit &nbsp; <i
                    class="bi bi-pencil-square" style="color:#fff"></i> </button>
        </div>

        <div class="mt-2">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mt-4">
                        <p class="settings-title p-4">
                            Subscriber Profile
                        </p>
                        <div class="d-flex justify-content-around">
                            <div>
                                <img src="{{ asset('assets/images/admin.png') }}" alt="" class="mb-2">
                                <p class="input-text text-center m-0 p-0">Alexa Fein</p>
                                <p class="settings-sub-title text-center">Admin, Vgen</p>
                            </div>
                            <div>
                                <p class="activity-text m-0 p-0">Company Name</p>
                                <p class="input-text">Backlinks</p>

                                <p class="activity-text m-0 p-0">Company Email</p>
                                <p class="input-text">alexa.feinn@backlinks.com</p>

                                <p class="activity-text m-0 p-0">LinkedIn Profile</p>
                                <p class="input-text">www.linkedin.com/alexa-feinn</p>
                            </div>
                            <div>
                                <p class="activity-text m-0 p-0">Login Method</p>
                                <p class="input-text">LinkedIn</p>


                                <p class="activity-text m-0 p-0">Publisher Source</p>
                                <p class="input-text">IT Tech</p>

                                <p class="activity-text m-0 p-0">Industry (optional)</p>
                                <p class="input-text">Marketing agency</p>
                            </div>
                            <div>
                                <p class="activity-text m-0 p-0">Signup Date</p>
                                <p class="input-text">20 March 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="card  mt-4">
                        <p class="settings-title p-4">
                            Content Interaction Summary 
                        </p>
                    </div>
                    <div>
                        <div class="card  mt-4">
                            <p class="settings-title p-4">
                                Device & Login Info
                            </p>
                        </div>
                        <div class="card  mt-4">
                            <p class="settings-title p-4">
                                Engagement Score
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card  mt-4">
                        <p class="settings-title p-4">
                            Recently Viewed
                        </p>
                    </div>
                    <div class="card  mt-4">
                        <p class="settings-title p-4">
                            Smart Recommendation
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection




@push('scripts')

    <script>

    </script>

@endpush