@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-9">
            <div class="card new-users-card">
                <h2 class="card-title">Welcome back Admin</h2>
                <p class="card-description">Create a brand new user and add them to site </p>
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 users-input-group form-validation-group">
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="username" class="col-form-label cust-form-label form-labels">Username <span class="required-input">*</span></label>
                                </div>
                                <div class="col-9 ">
                                    <input type="text" id="username" name="username" class="form-control cust-input-tag m-0" data-val="user_name" aria-describedby="usernameHelp" placeholder="alex_s">
                                </div>
                            </div>
                            <label class="form-label label-error-message form-error float-end"><span class="text-danger d-none"><i class="bi bi-exclamation-circle-fill"></i> Please enter user name</span></label>
                        </div>
                        <div class="col-xl-6 users-input-group form-validation-group">
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="email" class="col-form-label cust-form-label form-labels">Email <span class="required-input">*</span></label>
                                </div>
                                <div class="col-9">
                                    <input type="text" id="email" name="email" class="form-control cust-input-tag m-0" data-val="email" aria-describedby="emailHelp" placeholder="alex.smith@email.com">
                                </div>
                            </div>
                            <label class="form-label label-error-message form-error float-end"><span class="text-danger d-none"><i class="bi bi-exclamation-circle-fill"></i> Please enter valid email address</span></label>
                        </div>

                        <div class="col-xl-6 users-input-group form-validation-group">
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="firstname" class="col-form-label cust-form-label form-labels">First Name <span class="required-input">*</span></label>
                                </div>
                                <div class="col-9">
                                    <input type="text" id="firstname" name="firstname" class="form-control cust-input-tag m-0" data-val="alphabets" aria-describedby="firstnameHelp" placeholder="Alex">
                                </div>
                            </div>
                            <label class="form-label label-error-message form-error float-end"><span class="text-danger d-none"><i class="bi bi-exclamation-circle-fill"></i> Please enter valid first name</span></label>
                        </div>

                        <div class="col-xl-6 users-input-group form-validation-group">
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="lastname" class="col-form-label cust-form-label form-labels">Last Name <span class="required-input">*</span></label>
                                </div>
                                <div class="col-9">
                                    <input type="text" id="lastname" name="lastname" class="form-control cust-input-tag m-0" data-val="alphabets" aria-describedby="lastnameHelp" placeholder="Smith">
                                </div>
                            </div>
                            <label class="form-label label-error-message form-error float-end"><span class="text-danger d-none"><i class="bi bi-exclamation-circle-fill"></i> Please enter valid last name</span></label>
                        </div>

                        <div class="col-xl-6 users-input-group form-validation-group">
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="password" class="col-form-label cust-form-label form-labels">Password <span class="required-input">*</span></label>
                                </div>
                                <div class="col-9">
                                    <input type="password" id="password" name="password" class="form-control cust-input-tag m-0" data-val="password" aria-describedby="passwordHelp" placeholder="Enter password">
                                </div>
                            </div>
                            <label class="form-label label-error-message form-error float-end"><span class="text-danger d-none"><i class="bi bi-exclamation-circle-fill"></i> Please enter valid password</span></label>
                        </div>

                        <div class="col-xl-6 users-input-group  form-validation-group">
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="role" class="col-form-label cust-form-label form-labels">Role <span class="required-input">*</span></label>
                                </div>
                                <div class="col-9">
                                    <select class="form-select cust-select-tag m-0"  name="role" id="role" data-val="notempty">
                                        <option value="" selected>Choose Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="sales">Sales / CS Team</option>
                                        <option value="delivery">Delivery</option>
                                    </select>
                                </div>
                            </div>
                            <label class="form-label label-error-message form-error float-end"><span class="text-danger d-none"><i class="bi bi-exclamation-circle-fill"></i> Please select a role</span></label>
                        </div>
                        <div class="row justify-content-end pe-0">
                            <button type="submit" class="btn btn-primary btn-add-new-user">
                                <span>Add new user</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/helpers/ajax-helper.js') }}"></script>
<script src="{{ asset('assets/js/form-validations/form-validation.js') }}"></script>
<script>
    window.addEventListener('load', function () {
        $(document).ready(function () {
            $('form').on('submit', function (e) {
                e.preventDefault();
                
                if (!allFieldsValid($(this))) {
                    return false;
                }
                
                const formData = $(this).serialize();
                const urltoshow = "{{ route('user.view') }}";
                sendAjaxRequest({
                    url: $(this).attr('action'),
                    data: formData,
                    urltoshow: urltoshow,
                });
            });
        });
    });
</script>
@endpush
