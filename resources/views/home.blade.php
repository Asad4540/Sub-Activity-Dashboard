@extends('layouts.app')

@section('content')

    <div class="container-fluid px-4">
        <div class="row row-cols-1 row-cols-sm-2  row-cols-lg-4 g-4 mb-4">

            <!-- Card 1 -->
           <div class="col">
                <div class="card p-3 h-100">

                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card p-3 h-100">

                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card p-3 h-100">

                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="card p-3 h-100">

                </div>
            </div>

        </div>

        <div class="row g-4 align-items-stretch">
            <!-- RFP Table Section -->
            <div class=" col-lg-7">
                <div class="dashboard-card h-100 d-flex flex-column">
                    <!-- Header -->
                    <div class="header-section mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0 recentTitle">Subscriber Growth</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart Section -->
            <div class=" col-lg-5">
                <div class="chart-container d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0 rfpSubmitText">Performance Metrics</h4>
                        <div class="dropdown">
                            <button class="btn btn-sm d-flex align-items-center gap-2" type="button">
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