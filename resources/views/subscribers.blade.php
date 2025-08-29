@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-end gap-2 mb-3">
            <button class="btn-secondary" style="padding:0 !important">Export &nbsp;<i class="bi bi-arrow-down-square"
                    style="color:var(--btn-primary-color)"></i></button>
            <button type="button" class="btn-primary" data-bs-toggle="modal" data-bs-target="#subscriberModal">Add
                Subscriber
                &nbsp; <i class="bi bi-person-add" style="color:#fff"></i> </button>
        </div>

        <div class="p-3 subs-div">
            <div class="d-flex justify-content-between">
                <div class="search-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20" fill="none"
                        class="search-icon">
                        <path
                            d="M18.1634 16.8369L14.4533 13.1251C15.5657 11.6755 16.085 9.85701 15.906 8.03853C15.7269 6.22005 14.8629 4.53777 13.4891 3.33294C12.1153 2.12811 10.3346 1.49096 8.50834 1.55073C6.68205 1.6105 4.94687 2.36272 3.65479 3.65479C2.36272 4.94687 1.6105 6.68205 1.55073 8.50834C1.49096 10.3346 2.12811 12.1153 3.33294 13.4891C4.53777 14.8629 6.22005 15.7269 8.03853 15.906C9.85701 16.085 11.6755 15.5657 13.1251 14.4533L16.8384 18.1673C16.9256 18.2545 17.0292 18.3237 17.1431 18.3709C17.257 18.4181 17.3792 18.4424 17.5025 18.4424C17.6258 18.4424 17.7479 18.4181 17.8619 18.3709C17.9758 18.3237 18.0793 18.2545 18.1665 18.1673C18.2537 18.0801 18.3229 17.9766 18.3701 17.8626C18.4173 17.7487 18.4416 17.6266 18.4416 17.5033C18.4416 17.3799 18.4173 17.2578 18.3701 17.1439C18.3229 17.0299 18.2537 16.9264 18.1665 16.8392L18.1634 16.8369ZM3.43764 8.75014C3.43764 7.69942 3.74921 6.67231 4.33295 5.79867C4.9167 4.92503 5.7464 4.24412 6.71713 3.84203C7.68786 3.43994 8.75603 3.33473 9.78656 3.53972C10.8171 3.7447 11.7637 4.25067 12.5066 4.99363C13.2496 5.7366 13.7556 6.6832 13.9606 7.71372C14.1655 8.74424 14.0603 9.81241 13.6582 10.7831C13.2562 11.7539 12.5752 12.5836 11.7016 13.1673C10.828 13.7511 9.80085 14.0626 8.75014 14.0626C7.34162 14.0612 5.9912 13.501 4.99523 12.505C3.99926 11.5091 3.43908 10.1587 3.43764 8.75014Z"
                            fill="#B8B8B8" />
                    </svg>
                    <input type="search" class="tableSearch border border-2" placeholder="Search Subscriber..." />
                </div>

                <div class="toggle-container">
                    <div class="toggle-option active" data-status="all">All</div>
                    <div class="toggle-option" data-status="active">Active</div>
                    <div class="toggle-option" data-status="inactive">Inactive</div>
                </div>
            </div>
            <div class="mt-2 table-responsive">
                <table class="table table-hover table-cell-py">
                    <thead>
                        <tr>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">DESIGNATON</th>
                            <th scope="col">COMPANY</th>
                            <th scope="col">LOCATION</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>John Doe</b></td>
                            <td>johndoe@example.com</td>
                            <td>Software Engineer</td>
                            <td>Tech Innovations</td>
                            <td>New York, USA</td>
                            <td>Active</td>
                            <td>
                                <img src="{{ asset('assets/images/view.png') }}" onclick="window.location.href='{{ route('profile') }}'" style="cursor:pointer" alt="">
                                <img src="{{ asset('assets/images/edit.png') }}" alt="">
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Jane Smith</b></td>
                            <td>janesmith@example.com</td>
                            <td>Product Manager</td>
                            <td>GlobalTech</td>
                            <td>San Francisco, USA</td>
                            <td>Inactive</td>
                            <td>
                                <img src="{{ asset('assets/images/view.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.png') }}" alt="">
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Michael Johnson</b></td>
                            <td>michael.johnson@example.com</td>
                            <td>UX Designer</td>
                            <td>Creative Labs</td>
                            <td>London, UK</td>
                            <td>Active</td>
                            <td>
                                <img src="{{ asset('assets/images/view.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.png') }}" alt="">
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Jane Smith</b></td>
                            <td>amylee@example.com</td>
                            <td>Marketing Lead</td>
                            <td>Visionary Co.</td>
                            <td>Toronto, Canada</td>
                            <td>Active</td>
                            <td>
                                <img src="{{ asset('assets/images/view.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.png') }}" alt="">
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>David Brown</b></td>
                            <td>david.brown@example.com</td>
                            <td>Data Scientist</td>
                            <td>InnovaTech</td>
                            <td>Berlin, Germany</td>
                            <td>Inactive</td>
                            <td>
                                <img src="{{ asset('assets/images/view.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.png') }}" alt="">
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Jane Smith</b></td>
                            <td>emily.davis@example.com</td>
                            <td>HR Specialist</td>
                            <td>PeopleCare</td>
                            <td>Chicago, USA</td>
                            <td>Active</td>
                            <td>
                                <img src="{{ asset('assets/images/view.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.png') }}" alt="">
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>James Wilson</b></td>
                            <td>james.wilson@example.com</td>
                            <td>Sales Executive</td>
                            <td>FutureCorp</td>
                            <td>Paris, France</td>
                            <td>Active</td>
                            <td>
                                <img src="{{ asset('assets/images/view.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.png') }}" alt="">
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Olivia Martinez</b></td>
                            <td>olivia.martinez@example.com</td>
                            <td>Business Analyst</td>
                            <td>NextGen Solutions</td>
                            <td>Madrid, Spain</td>
                            <td>Inactive</td>
                            <td>
                                <img src="{{ asset('assets/images/view.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.png') }}" alt="">
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Jane Smith</b></td>
                            <td>robert.garcia@example.com</td>
                            <td>Software Architect</td>
                            <td>TechGuru</td>
                            <td>Sydney, Australia</td>
                            <td>Active</td>
                            <td>
                                <img src="{{ asset('assets/images/view.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.png') }}" alt="">
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>David Brown</b></td>
                            <td>isabella.martinez@example.com</td>
                            <td>Content Strategist</td>
                            <td>BrandVision</td>
                            <td>Los Angeles, USA</td>
                            <td>Active</td>
                            <td>
                                <img src="{{ asset('assets/images/view.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.png') }}" alt="">
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex align-items-center justify-content-between px-2">
                    <div>
                        <p>Showing 10 of 1,243 subscribers </p>
                    </div>
                    <div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination gap-3">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>

                            </ul>
                        </nav>
                    </div>
                    <div>
                        <ul class="d-flex gap-2">
                            <button class="btn-secondary">Previous</button>
                            <button class="btn-primary">Next</button>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Add Subsriber Modal  -->
    <div class="modal fade" id="subscriberModal" tabindex="-1" aria-labelledby="subscriberModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="subscriberModalLabel">Add New Subscriber</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- Full Name -->
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter Full Name">
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter Email Address">
                        </div>

                        <!-- Company + Job -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Company Name</label>
                                <input type="text" class="form-control" placeholder="Enter Company Name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Job Designation</label>
                                <select class="form-select">
                                    <option selected disabled>Job Designation</option>
                                    <option>Manager</option>
                                    <option>Developer</option>
                                    <option>Designer</option>
                                </select>
                            </div>
                        </div>

                        <!-- City + State -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" placeholder="Enter City">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">State</label>
                                <input type="text" class="form-control" placeholder="Enter State">
                            </div>
                        </div>

                        <!-- Country -->
                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <input type="text" class="form-control" placeholder="Enter Country">
                        </div>

                        <!-- LinkedIn -->
                        <div class="mb-3">
                            <label class="form-label">LinkedIn Profile Link</label>
                            <input type="url" class="form-control" placeholder="Paste Your LinkedIn URL">
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label class="form-label d-block">Status</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="active" value="active">
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inactive" value="inactive">
                                <label class="form-check-label" for="inactive">Inactive</label>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <a href="#" class="text-primary fw-bold"><i class="bi bi-plus-lg"></i> Add Phone Number</a>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">ADD</button>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')
    <script>
        const toggles = document.querySelectorAll('.toggle-option');

        toggles.forEach(btn => {
            btn.addEventListener('click', () => {
                toggles.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const status = btn.getAttribute('data-status');
                console.log('Selected status:', status);
            });
        });
    </script>
@endpush