@extends('layouts.app')

@section('content')

    <div class="mx-4 p-3">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-5 g-4 mb-4">

            <div class="col">
                <div class="card h-100 mb-2">
                    <div class="d-flex justify-content-between p-3">
                        <div> <span class="card-head">Total Subscribers </span><br>
                            <span class="card-nums"> 1,243</span> <span class="cards-percent text-success">+12.5%</span>
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/blue-profile.png') }}" alt="">
                        </div>
                    </div>
                    <p class="px-3">
                        <i class="bi bi-arrow-up-right text-success"></i><span class="comparison-text"> Compared to last
                            month</span>
                    </p>
                </div>
            </div>


            <div class="col">
                <div class="card h-100 mb-2">
                    <div class="d-flex justify-content-between p-3">
                        <div> <span class="card-head">Active Users </span><br>
                            <span class="card-nums"> 483</span> <span class="cards-percent text-success">+18.5%</span>
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/green-profile.png') }}" alt="">
                        </div>
                    </div>
                    <p class="px-3">
                        <i class="bi bi-arrow-up-right text-success"></i><span class="comparison-text"> Compared to last
                            month</span>
                    </p>
                </div>
            </div>


            <div class="col">
                <div class="card h-100 mb-2">
                    <div class="d-flex justify-content-between p-3">
                        <div> <span class="card-head">New Registration </span><br>
                            <span class="card-nums"> 83</span> <span class="cards-percent text-success">+10%</span>
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/registraton.png') }}" style="width:60px" alt="">
                        </div>
                    </div>
                    <p class="px-3">
                        <i class="bi bi-arrow-up-right text-success"></i><span class="comparison-text"> Compared to last
                            month</span>
                    </p>
                </div>
            </div>


            <div class="col">
                <div class="card h-100 mb-2">
                    <div class="d-flex justify-content-between p-3">
                        <div> <span class="card-head">Conversion Rate </span><br>
                            <span class="card-nums"> 18.4%</span> <span class="cards-percent text-danger">+14%</span>
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/conversion.png') }}" style="width:60px" alt="">
                        </div>
                    </div>
                    <p class="px-3">
                        <i class="bi bi-arrow-down-right text-danger"></i><span class="comparison-text"> Compared to last
                            month</span>
                    </p>
                </div>
            </div>


            <div class="col">
                <div class="card h-100 mb-2">
                    <div class="d-flex justify-content-between p-3">
                        <div> <span class="card-head">Download </span><br>
                            <span class="card-nums"> 253</span> <span class="cards-percent text-success">+10%</span>
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/orange-profile.png') }}" alt="">
                        </div>
                    </div>
                    <p class="px-3">
                        <i class="bi bi-arrow-up-right text-success"></i><span class="comparison-text"> Compared to last
                            month</span>
                    </p>
                </div>
            </div>

        </div>

        <div class="row g-4 align-items-stretch">
            <!--Engagement Score Metrics -->
            <div class=" col-lg-7">
                <div class="div-card d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title">Engagement Score Metrics</h4>
                    </div>

                    <div class="chart-wrapper">
                        <!-- <canvas id="rfpChart"></canvas> -->
                    </div>
                </div>
            </div>

            <!-- Top Interests -->
            <div class=" col-lg-5">
                <div class="div-card d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title">Top Interests</h4>
                    </div>

                    <div class="">
                        <canvas id="interestsChart" width="250px" height="200px"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 align-items-stretch mt-2">
            <!--Engagement Metrics -->
            <div class=" col-lg-8">
                <div class="div-card h-100 d-flex flex-column">
                    <!-- Header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0 db-cards-title">Engagement Metrics</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conversion Funnel -->
            <div class=" col-lg-4 ">
                <div class="div-card  d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title">Conversion Funnel</h4>
                    </div>

                    <div class="chart-wrapper">
                        <!-- <canvas id="rfpChart"></canvas> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 align-items-stretch mt-2">
            <!--Audience Growth -->
            <div class=" col-lg-6">
                <div class="div-card h-100 d-flex flex-column">
                    <!-- Header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0 db-cards-title">Audience Growth</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activities -->
            <div class=" col-lg-3 ">
                <div class="div-card  d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title">Activities</h4>
                    </div>

                    <div class="chart-wrapper">
                        <!-- <canvas id="rfpChart"></canvas> -->
                    </div>
                </div>
            </div>

            <!-- Top Traffic -->
            <div class=" col-lg-3 ">
                <div class="div-card  d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title">Top Traffic</h4>
                    </div>

                    <div class="chart-wrapper">
                        <!-- <canvas id="rfpChart"></canvas> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 align-items-stretch mt-2">
            <!--Hot Leads -->
            <div class=" col-lg-8">
                <div class="div-card h-100 d-flex flex-column">
                    <!-- Header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0 db-cards-title">Hot Leads</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flags -->
            <div class=" col-lg-4 ">
                <div class="div-card  d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title">Flags</h4>
                    </div>

                    <div class="chart-wrapper">
                        <!-- <canvas id="rfpChart"></canvas> -->
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection


@push('scripts')
    <script>

        //INTEREST CHART  
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('interestsChart')?.getContext('2d');
            if (!ctx) {
                console.warn('Canvas element with ID "interestsChart" not found!');
                return;
            }

            const interestsChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['AI/ML', 'Backup & DR', 'Cloud Tech', 'IT', 'Data Security', 'Infrastructure', 'Cybersecurity', 'DevOps'],
                    datasets: [{
                        label: 'Engagement ',
                        data: [165, 235, 125, 120, 110, 258, 122, 318],
                        backgroundColor: [
                            '#a68bf6', '#66b3ff', '#ff9130', '#9de5d5',
                            '#6d6af6', '#96c4f5', '#5ee84b', '#f7d6a3'
                        ],
                        borderRadius: 5,
                        barThickness: 30
                    }]
                },
                options: {
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: { color: '#999' }
                        },
                        x: {
                            ticks: {
                                color: '#000',
                                font: { size: 14, weight: 'bold' }
                            }
                        }
                    }
                }
            });
        });
    </script>
@endpush