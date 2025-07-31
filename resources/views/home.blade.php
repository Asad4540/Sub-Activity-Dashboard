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
            <div class=" col-lg-8">
                <div class="div-card h-100 d-flex flex-column">
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0 db-cards-title">Subscriber Growth</h4>
                            <div class="toggle-container">
                                <div class="toggle-option active" data-status="all">All</div>
                                <div class="toggle-option" data-status="active">Active Subscriber</div>
                                <div class="toggle-option" data-status="new">New Registrations</div>
                                <div class="toggle-option" data-status="downloads">Downloads</div>

                            </div>
                        </div>
                        <div class="pt-4 d-flex justify-content-center">
                            <canvas id="subscriberGrowthChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Performance Metrics -->
            <div class="col-lg-4">
                <div class="card shadow-sm p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">Performance Metrics</h5>
                        <button class="btn btn-sm d-flex align-items-center gap-2 a-link" type="button">
                            View Details
                        </button>
                    </div>

                    <!-- Metrics Progress Bars -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>Engagement Rate</span>
                            <span>65%</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-success" style="width: 65%;"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>Content Popularity</span>
                            <span>78%</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-primary" style="width: 78%;"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>User Retention</span>
                            <span>42%</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-warning" style="width: 42%;"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>Conversion Rate</span>
                            <span>23%</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-purple" style="width: 23%; background-color: #9b59b6;"></div>
                        </div>
                    </div>

                    <!-- Donut Chart -->
                    <div class="pt-4 d-flex justify-content-center">
                        <canvas id="metricsDonutChart" class="donut"></canvas>
                    </div>
                </div>
            </div>

        </div>

        <div class="row g-4 align-items-stretch mt-2">
            <!-- Activities -->
            <div class=" col-lg-4">
                <div class="div-card h-100 d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title">Activities</h4>
                        <div class="dropdown">
                            <button class="btn btn-sm d-flex align-items-center gap-2 a-link" type="button">
                                View Details
                            </button>
                        </div>
                    </div>

                    <div class="chart-wrapper">
                        <canvas id="activityChart" width="250px" height="auto"></canvas>
                    </div>
                    <div class="mt-3">
                        <div class="row gap-3">
                            <div class="col border border-1 rounded p-2 px-3">
                                <div class="">
                                    <img src="{{ asset('assets/images/login-dot.png') }}" alt="">
                                    <span class="activity-text">Login Activities</span>
                                </div>
                                <div class="mt-1">
                                    <span class="activity-no">442</span>
                                </div>
                            </div>
                            <div class="col border border-1 rounded p-2 px-3">
                                <div class="">
                                    <img src="{{ asset('assets/images/view-dot.png') }}" alt="">
                                    <span class="activity-text">Content Views</span>
                                </div>
                                <div class="mt-1">
                                    <span class="activity-no">632</span>
                                </div>
                            </div>
                        </div>
                        <div class="row gap-3 mt-3">
                            <div class="col border border-1 rounded p-2 px-3">
                                <div class="">
                                    <img src="{{ asset('assets/images/download-dot.png') }}" alt="">
                                    <span class="activity-text">Downloads</span>
                                </div>
                                <div class="mt-1">
                                    <span class="activity-no">502</span>
                                </div>
                            </div>
                            <div class="col border border-1 rounded p-2 px-3">
                                <div class="">
                                    <img src="{{ asset('assets/images/registration-dot.png') }}" alt="">
                                    <span class="activity-text">Event Registration</span>
                                </div>
                                <div class="mt-1">
                                    <span class="activity-no">150</span>
                                </div>
                            </div>
                        </div>

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
                        <canvas id="trafficChart" width="250" height="250"></canvas>
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

                    <div class="">
                        <canvas id="interestsChart" width="250px" height="250px"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 align-items-stretch mt-2">
            <!-- Subscriber  -->
            <div class=" col-lg-7">
                <div class="div-card h-100 d-flex flex-column">
                    <!-- Header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0 db-cards-title">Subscribers</h4>
                        </div>
                        <div class="mt-2 table-responsive">
                            <table class="table table-hover table-cell-py">
                                <thead>
                                    <tr>
                                        <th scope="col">NAME</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">DESIGNATON</th>
                                        <th scope="col">COMPANY</th>
                                        <th scope="col">STATUS</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><b>John Doe</b></td>
                                        <td>johndoe@example.com</td>
                                        <td>Software Engineer</td>
                                        <td>Tech Innovations</td>

                                        <td>Active</td>

                                    </tr>
                                    <tr>
                                        <td><b>Jane Smith</b></td>
                                        <td>janesmith@example.com</td>
                                        <td>Product Manager</td>
                                        <td>GlobalTech</td>

                                        <td>Inactive</td>

                                    </tr>
                                    <tr>
                                        <td><b>Michael Johnson</b></td>
                                        <td>michael.johnson@example.com</td>
                                        <td>UX Designer</td>
                                        <td>Creative Labs</td>
                                        <td>Active</td>

                                    </tr>
                                    <tr>
                                        <td><b>Jane Smith</b></td>
                                        <td>amylee@example.com</td>
                                        <td>Marketing Lead</td>
                                        <td>Visionary Co.</td>
                                        <td>Active</td>

                                    </tr>
                                    <tr>
                                        <td><b>David Brown</b></td>
                                        <td>david.brown@example.com</td>
                                        <td>Data Scientist</td>
                                        <td>InnovaTech</td>
                                        <td>Inactive</td>

                                    </tr>

                                </tbody>
                            </table>
                            <div class="d-flex align-items-center justify-content-end px-2">
                                <button class="btn-primary">View all</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="col-lg-5">
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
        <script>

            //ACTIVITES CHART
            document.addEventListener('DOMContentLoaded', function () {
                const ctx = document.getElementById('activityChart').getContext('2d');
                const activityChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                        datasets: [
                            {
                                label: 'Login Activities',
                                data: [120, 190, 170, 220, 160, 190, 200],
                                borderColor: '#C084FC',
                                backgroundColor: 'rgba(192, 132, 252, 0.2)',
                                tension: 0.4
                            },
                            {
                                label: 'Content Views',
                                data: [200, 300, 400, 350, 300, 320, 280],
                                borderColor: '#3B82F6',
                                backgroundColor: 'rgba(59, 130, 246, 0.2)',
                                tension: 0.4
                            },
                            {
                                label: 'Downloads',
                                data: [250, 200, 180, 160, 140, 130, 120],
                                borderColor: '#F87171',
                                backgroundColor: 'rgba(248, 113, 113, 0.2)',
                                tension: 0.4
                            },
                            {
                                label: 'Event Registration',
                                data: [50, 70, 90, 110, 130, 150, 170],
                                borderColor: '#34D399',
                                backgroundColor: 'rgba(52, 211, 153, 0.2)',
                                tension: 0.4
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        scales: {
                            x: {
                                grid: {
                                    display: false
                                }
                            },
                            y: {
                                grid: {
                                    color: '#f3f3f3'
                                }
                            }
                        }
                    }
                });
            });

            // TRAFFIC CHART  
            const ctx = document.getElementById('trafficChart').getContext('2d');
            const trafficChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Direct', 'Organic', 'Social', 'Referral'],
                    datasets: [{
                        data: [50, 10, 15, 25],
                        backgroundColor: [
                            '#66b3ff',  // Direct - Blue
                            '#9de5d5',  // Organic - Mint
                            '#a68bf6',  // Social - Purple
                            '#ffb454'   // Referral - Orange
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            position: 'right',
                            labels: {
                                color: '#666',
                                boxWidth: 12,
                                padding: 20,
                                font: {
                                    weight: '500',
                                    size: 14
                                },
                                generateLabels: function (chart) {
                                    const data = chart.data;
                                    const total = data.datasets[0].data.reduce((a, b) => a + b, 0);
                                    return data.labels.map((label, i) => {
                                        const value = data.datasets[0].data[i];
                                        const percentage = Math.round((value / total) * 100);
                                        return {
                                            text: `${label} (${percentage}%)`,
                                            fillStyle: data.datasets[0].backgroundColor[i],
                                            strokeStyle: '#fff',
                                            lineWidth: 1,
                                            hidden: false,
                                            index: i
                                        };
                                    });
                                }
                            }
                        }
                    }
                }
            });


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
                            label: 'Engagement %',
                            data: [65, 35, 25, 20, 10, 28, 12, 18],
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

            //PERFORMANCE METRICS
            document.addEventListener("DOMContentLoaded", function () {
                const ctx = document.getElementById('metricsDonutChart').getContext('2d');
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Engagement', 'Popularity', 'Retention', 'Conversion'],
                        datasets: [{
                            data: [65, 78, 42, 23],
                            backgroundColor: [
                                '#2ecc71', // green
                                '#3498db', // blue
                                '#e67e22', // orange
                                '#9b59b6'  // purple
                            ],
                            borderWidth: 0
                        }]
                    },
                    options: {
                        cutout: '65%',
                        plugins: {
                            legend: {
                                display: false
                            }
                        }
                    }
                });
            });

            //SUBSRIBER GROWTH
            document.addEventListener("DOMContentLoaded", function () {
                const ctx = document.getElementById("subscriberGrowthChart").getContext("2d");

                // Gradients
                const gradientGreen = ctx.createLinearGradient(0, 0, 0, 300);
                gradientGreen.addColorStop(0, "rgba(0, 200, 83, 0.2)");
                gradientGreen.addColorStop(1, "rgba(0, 200, 83, 0)");

                const gradientBlue = ctx.createLinearGradient(0, 0, 0, 300);
                gradientBlue.addColorStop(0, "rgba(63, 81, 181, 0.2)");
                gradientBlue.addColorStop(1, "rgba(63, 81, 181, 0)");

                const gradientOrange = ctx.createLinearGradient(0, 0, 0, 300);
                gradientOrange.addColorStop(0, "rgba(255, 152, 0, 0.2)");
                gradientOrange.addColorStop(1, "rgba(255, 152, 0, 0)");

                const chart = new Chart(ctx, {
                    type: "line",
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Nov", "Dec"],
                        datasets: [
                            {
                                label: "Active Subscribers",
                                data: [0, 300, 600, 800, 900, 1500, 1200, 1400, 1700, 1500, 1200],
                                fill: true,
                                backgroundColor: gradientGreen,
                                borderColor: "green",
                                tension: 0.4,
                            },
                            {
                                label: "New Registrations",
                                data: [0, 0, 400, 700, 300, 600, 900, 1000, 1100, 1000, 900],
                                fill: true,
                                backgroundColor: gradientBlue,
                                borderColor: "blue",
                                tension: 0.4,
                            },
                            {
                                label: "Downloads",
                                data: [0, 0, 0, 300, 350, 0, 400, 600, 700, 600, 400],
                                fill: true,
                                backgroundColor: gradientOrange,
                                borderColor: "orange",
                                tension: 0.4,
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: { display: false }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    stepSize: 300,
                                },
                                grid: {
                                    drawBorder: false
                                }
                            },
                            x: {
                                grid: {
                                    display: false
                                }
                            }
                        }
                    }
                });
            });

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