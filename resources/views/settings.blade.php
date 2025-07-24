@extends('layouts.app')

@section('content')

    <div class="px-5 mt-4">
        <div class="tabs-card d-flex">
            <div class="nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="profile-tab" data-bs-toggle="pill" data-bs-target="#profile"
                    type="button" role="tab">Profile Information</button>
                <button class="nav-link" id="security-tab" data-bs-toggle="pill" data-bs-target="#security" type="button"
                    role="tab">Security & Password</button>
                <button class="nav-link" id="notification-tab" data-bs-toggle="pill" data-bs-target="#notification"
                    type="button" role="tab">Notification Preferences</button>
                <button class="nav-link" id="devices-tab" data-bs-toggle="pill" data-bs-target="#devices" type="button"
                    role="tab">Devices Info</button>
            </div>

            <div class="tab-content tab-wrapper" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="profile" role="tabpanel">Your profile information goes here.
                </div>
                <div class="tab-pane fade" id="security" role="tabpanel">Change password and security settings here.</div>
                <div class="tab-pane fade" id="notification" role="tabpanel">Manage notifications and alerts here.</div>
                <div class="tab-pane fade" id="devices" role="tabpanel">See and manage your logged-in devices here.</div>
            </div>
        </div>
    </div>
@endsection