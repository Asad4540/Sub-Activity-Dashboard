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

            <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

            <div class="tab-content tab-wrapper" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="profile" role="tabpanel">
                    <div>
                        <p> <span class="settings-title"> Profile Information</span><br>
                            <span class="settings-sub-title"> Make sure your profile reflects the latest info</span>
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

                <div class="tab-pane fade " id="security" role="tabpanel">
                    <p> <span class="settings-title"> Security & Password</span><br>
                        <span class="settings-sub-title"> Manage your password and enhance account safety.</span>
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
                <div class="tab-pane fade" id="notification" role="tabpanel">
                    <div>
                        <p> <span class="settings-title">Notification Preferences</span><br>
                            <span class="settings-sub-title">Manage your alerts, updates, and email preferences.</span>
                        </p><br>
                        <div class="px-4">
                            <div class="d-flex justify-content-between align-items-top mb-2">
                                <div>
                                    <p class="input-text">Email Notifications </p>
                                    <p class="password-text">Receive email updates about your account activity</p>
                                </div>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="d-flex justify-content-between align-items-top mb-2">
                                <div>
                                    <p class="input-text">Push Notifications </p>
                                    <p class="password-text">Receive push notifications on your mobile device</p>
                                </div>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="d-flex justify-content-between align-items-top mb-2">
                                <div>
                                    <p class="input-text">SMS Notifications </p>
                                    <p class="password-text">Receive text messages for important updates</p>
                                </div>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="d-flex justify-content-between align-items-top mb-2">
                                <div>
                                    <p class="input-text">Marketing Communications </p>
                                    <p class="password-text">Receive promotional offers and updates</p>
                                </div>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn-primary">Save Preferences </button>
                        </div>
                    </div>
                </div>
                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------  -->

                <div class="tab-pane fade" id="devices" role="tabpanel">
                    <p> <span class="settings-title">Device & Login Info</span><br>
                        <span class="settings-sub-title">Track your recent logins and connected devices.</span>
                    </p><br>
                </div>
            </div>
        </div>
    </div>
@endsection