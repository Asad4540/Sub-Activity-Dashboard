@extends('layouts.app')

@section('content')

    <div class="container-fluid px-4">
        <div class="row row-cols-1 row-cols-sm-2  row-cols-lg-4 g-4 mb-4">

            <!-- Card 1 -->
            <div class="col">
                <div class="card  h-100">
                    <div class="d-flex justify-content-between p-3">
                        <div> <span class="card-head">Total Subscribers </span><br>
                            <span class="card-nums"> 1,243</span> <span class="cards-percent text-success"> +8.2% vs last
                                month
                            </span>
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/blue-profile.png') }}" alt="">
                        </div>
                    </div>
                    <div><img src="{{ asset('assets/images/blue-wave.png') }}" class="w-100" alt=""></div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card  h-100">
                    <div class="d-flex justify-content-between p-3">
                        <div> <span class="card-head">Active Subscriber</span><br>
                            <span class="card-nums"> 984</span><span class="cards-percent text-success"> +4.7% Active
                                Subscriber
                            </span>
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/green-profile.png') }}" alt="">
                        </div>
                    </div>
                    <div><img src="{{ asset('assets/images/green-wave.png') }}" class="w-100" alt=""></div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card  h-100">
                    <div class="d-flex justify-content-between p-3">
                        <div> <span class="card-head">New Registrations </span><br>
                            <span class="card-nums"> 150</span><span class="cards-percent text-danger"> -2.1% vs last month.
                            </span>
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/violet-profile.png') }}" alt="">
                        </div>
                    </div>
                    <div><img src="{{ asset('assets/images/violet-wave.png') }}" class="w-100" alt=""></div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="card  h-100">
                    <div class="d-flex justify-content-between p-3">
                        <div> <span class="card-head">Downloads </span><br>
                            <span class="card-nums"> 500</span><span class="cards-percent text-success"> +12.3% Downloads
                            </span>
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/orange-profile.png') }}" alt="">
                        </div>
                    </div>
                    <div><img src="{{ asset('assets/images/orange-wave.png') }}" class="w-100" alt=""></div>
                </div>
            </div>

        </div>

        <div class="row g-4 align-items-stretch">
            <!-- Subscriber Growth -->
            <div class=" col-lg-7">
                <div class="div-card h-100 d-flex flex-column">
                    <!-- Header -->
                    <div >
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0 db-cards-title">Subscriber Growth</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Performance Metrics -->
            <div class=" col-lg-5">
                <div class="div-card  d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title">Performance Metrics</h4>
                        <div class="dropdown">
                            <button class="btn btn-sm d-flex align-items-center gap-2 a-link" type="button">
                                View Details
                            </button>
                        </div>
                    </div>

                    <div class="chart-wrapper">
                        <!-- <canvas id="rfpChart"></canvas> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 align-items-stretch mt-2">
            <!-- Activities -->
            <div class=" col-lg-4">
                <div class="div-card  d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title">Activities</h4>
                        <div class="dropdown">
                            <button class="btn btn-sm d-flex align-items-center gap-2 a-link" type="button">
                                View Details
                            </button>
                        </div>
                    </div>

                    <div class="chart-wrapper">
                        <!-- <canvas id="rfpChart"></canvas> -->
                    </div>
                </div>
            </div>

            <!-- Traffic Sources -->
            <div class=" col-lg-4">
                <div class="div-card  d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title">Traffic Sources</h4>
                        <div class="dropdown">
                            <button class="btn btn-sm d-flex align-items-center gap-2 a-link" type="button">
                                View Details
                            </button>
                        </div>
                    </div>

                    <div class="chart-wrapper">
                        <!-- <canvas id="rfpChart"></canvas> -->
                    </div>
                </div>
            </div>

            <!-- Top Interests -->
            <div class="col-lg-4">
                <div class="div-card  d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title">Top Interests</h4>
                        <div class="dropdown">
                            <button class="btn btn-sm d-flex align-items-center gap-2 a-link" type="button">
                                View Details
                            </button>
                        </div>
                    </div>

                    <div class="chart-wrapper">
                        <!-- <canvas id="rfpChart"></canvas> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 align-items-stretch mt-2">
            <!-- Subscriber  -->
            <div class=" col-lg-7">
                <div class="div-card h-100 d-flex flex-column">
                    <!-- Header -->
                    <div >
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0 db-cards-title">Subscribers</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class=" col-lg-5">
                <div class="div-card  d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title">Recent Activity</h4>
                        <div class="dropdown">
                            <button class="btn btn-sm d-flex align-items-center gap-2 a-link" type="button">
                                All Activity
                            </button>
                        </div>
                    </div>

                    <div class="chart-wrapper">
                        <!-- <canvas id="rfpChart"></canvas> -->
                    </div>
                </div>
            </div>
        </div>


@endsection
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Chart.js configuration
            const ctx = document.getElementById('rfpChart').getContext('2d');
            const rfpChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    datasets: [{
                        label: 'RFP Submitted',
                        data: [7, 10, 11, 12, 8, 6, 4, 5, 8, 6, 5, 4, 6, 5, 3, 4, 6, 8, 9, 10, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2, 4],
                        backgroundColor: '#3b82f6',
                        borderColor: '#3b82f6',
                        borderWidth: 0,
                        borderRadius: 2,
                        borderSkipped: false,
                        barThickness: 20, // 👈 Adjust this value to control bar width (e.g., 8-12 for slim bars)
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: '#1f2937',
                            titleColor: '#ffffff',
                            bodyColor: '#ffffff',
                            borderColor: '#374151',
                            borderWidth: 1,
                            cornerRadius: 8,
                            displayColors: false,
                            callbacks: {
                                title: function (context) {
                                    return '20th March 2020';
                                },
                                label: function (context) {
                                    return '20 RFP Submitted +6.24%';
                                }
                            }

                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            },
                            border: {
                                display: false
                            },
                            ticks: {
                                color: '#6b7280',
                                font: {
                                    size: 12
                                }
                            }
                        },
                        y: {
                            beginAtZero: true,
                            max: 16,
                            grid: {
                                color: '#f3f4f6',
                                drawBorder: false
                            },
                            border: {
                                display: false
                            },
                            ticks: {
                                color: '#6b7280',
                                font: {
                                    size: 12
                                },
                                stepSize: 2
                            }
                        }
                    },
                    elements: {
                        bar: {
                            borderRadius: 2
                        }
                    }
                }
            });
        </script>
    @endpush