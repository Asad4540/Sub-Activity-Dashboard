@extends('layouts.app')

@section('content')
    <div class="mx-4 p-3 subs-div">
        <div class="d-flex justify-content-between">
            <div><input type="search" name="" id=""></div>
            <div class="d-flex justify-content-between gap-3">
                <p>All</p>
                <p>Active</p>
                <p>Inactive</p>
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
                            <img src="{{ asset('assets/images/view.png') }}" alt="">
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
        </div>
    </div>
@endsection