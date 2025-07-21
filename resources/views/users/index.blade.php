@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card users-card">
        <div class="users-card-header">
            <div class="d-flex justify-content-end align-items-center">
                <a class="btn btn-primary" href="{{ route('user.new') }}"><i class="bi bi-plus text-white"></i> Add User</a>
            </div>
            <div class="users-table-filter d-flex justify-content-end align-items-center">
                <div class="input-group search-input-group">
                    <input type="text" class="form-control table-search-input-tag" placeholder="Search by Username" aria-label="Search" aria-describedby="input-addon">
                    <span class="input-group-text" id="input-addon"><i class="bi bi-search "></i></span>
                </div>
                <select class="form-select table-search-select-tag"  name="using_job_titles_or_keywords" id="using_job_titles_or_keywords">
                    <option value="" selected>Filter by Role</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="rfp-details-card-section">
            Table view
        </div>
        <hr>
    </div>
</div>
@endsection
