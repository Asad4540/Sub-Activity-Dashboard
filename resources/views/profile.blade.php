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
                <div class="col-lg-8 col-md-12">
                    <div class="card mt-4">
                        <p class="settings-title p-4">
                            Subscriber Profile
                        </p>
                        <div class="d-flex justify-content-around">
                            <div>
                                <img src="{{ asset('assets/images/admin.png') }}" alt="" class="mb-2 img-fluid">
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
                        <div class="row d-flex justify-content-around mb-5">
                            <div class="col-lg-3 d-flex gap-3 px-3 py-2 content-interaction-box"
                                style="background:#E6FFEFCF">
                                <div>
                                    <img src="{{ asset('assets/images/editgreen.png') }}" class="img-fluid" alt="">
                                </div>
                                <div>
                                    <span class="input-text">Articals Read</span> <br>
                                    <span class="settings-title">52</span>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex gap-3 px-3 py-2 content-interaction-box" style="background:#F9EBED">
                                <div>
                                    <img src="{{ asset('assets/images/clock.png') }}" class="img-fluid" alt="">
                                </div>
                                <div>
                                    <span class="input-text">Total Time Spend</span> <br>
                                    <span class="settings-title">5h 2min</span>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex gap-3 px-3 py-2 content-interaction-box" style="background:#F8F4FC">
                                <div>
                                    <img src="{{ asset('assets/images/note.png') }}" class="img-fluid" alt="">
                                </div>
                                <div>
                                    <span class="input-text">Whitepapers</span> <br>
                                    <span class="settings-title">82</span>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-around">
                            <div class="col-lg-5 h-100" style="background:#F4F5F9">
                                <p class="input-text ">Top Categories engaged</p>
                            </div>
                            <div class="col-lg-5 h-100" style="background:#F4F5F9">
                                <p class="input-text">Content Type Interaction</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-4">
                        <div class="col-lg card  mt-4">
                            <p class="settings-title p-4">
                                Device & Login Info
                            </p>
                            <div class="row px-3 d-flex justify-content-around gap-3">
                                <div class="col-lg-5 d-flex border border-1 rounded p-2 gap-2">
                                    <div>
                                        <img src="{{ asset('assets/images/note.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <span class="input-text">Whitepapers</span> <br>
                                        <span class="settings-title">82</span>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-flex border border-1 rounded p-2 gap-2">
                                    <div>
                                        <img src="{{ asset('assets/images/note.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <span class="input-text">Whitepapers</span> <br>
                                        <span class="settings-title">82</span>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-flex border border-1 rounded p-2 gap-2">
                                    <div>
                                        <img src="{{ asset('assets/images/note.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <span class="input-text">Whitepapers</span> <br>
                                        <span class="settings-title">82</span>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-flex border border-1 rounded p-2 gap-2">
                                    <div>
                                        <img src="{{ asset('assets/images/note.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <span class="input-text">Whitepapers</span> <br>
                                        <span class="settings-title">82</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg card  mt-4">
                            <p class="settings-title p-4">
                                Engagement Score
                            </p>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
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