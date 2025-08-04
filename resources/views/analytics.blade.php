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
                <div class="div-card h-100 d-flex flex-column ">
                    <div class="d-flex align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title ">Engagement Score Metrics</h4>
                    </div>

                    <div class="mt-2 table-responsive">
                        <table class="table table-hover table-cell-py">
                            <thead class="eng-score-thead">
                                <tr>
                                    <th scope="col">AUDIENCE</th>
                                    <th scope="col">DESCRIPTION</th>
                                    <th scope="col">SCORE RANGE</th>
                                    <th scope="col">TIRE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="eng-score-tr">
                                    <td>30%</td>
                                    <td>Highly active: daily logins, downloads, shares</td>
                                    <td>87</td>
                                    <td><span class="hot">Hot</span></td>
                                </tr>
                                <tr class="eng-score-tr">
                                    <td>40%</td>
                                    <td>Moderate activity: reads articles occasionally</td>
                                    <td>70</td>
                                    <td><span class="warm">Warm</span></td>

                                </tr>
                                <tr class="eng-score-tr">
                                    <td>25%</td>
                                    <td>Low engagement: rarely active, at risk of churn</td>
                                    <td>20</td>
                                    <td><span class="cold">Cold</span></td>
                                </tr>

                            </tbody>
                        </table>

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
                    <div class="d-flex align-items-center">
                        <h4 class="mb-0 db-cards-title">Engagement Metrics</h4>
                    </div>

                    <div class="chart-wrapper">
                        <canvas id="" width="250" height="250"></canvas>
                    </div>
                </div>
            </div>


            <!-- Conversion Funnel -->
            <div class=" col-lg-4 ">
                <div class="div-card h-100 d-flex flex-column">
                    <div class="d-flex  align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title">Conversion Funnel</h4>
                    </div>

                    <div class="mt-2 table-responsive">
                        <table class="table table-hover table-cell-py">
                            <thead class="conv-funel-thead">
                                <tr>
                                    <th scope="col">STAGE</th>
                                    <th scope="col">USERS</th>
                                    <th scope="col">% OF PREVIOUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="conv-funel-tr ">
                                    <td>View</td>
                                    <td>10,000</td>
                                    <td>47%</td>
                                </tr>
                                <tr class="conv-funel-tr ">
                                    <td>Engage</td>
                                    <td>6,500</td>
                                    <td>35%</td>
                                </tr>
                                <tr class="conv-funel-tr ">
                                    <td>Interact</td>
                                    <td>5,000</td>
                                    <td>47%</td>
                                </tr>
                                <tr class="conv-funel-tr ">
                                    <td>Convert</td>
                                    <td>1260</td>
                                    <td>17%</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 align-items-stretch mt-2">
            <!--Audience Growth -->
            <div class=" col-lg-6">
                <div class="div-card h-100 d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 db-cards-title">Audience Growth</h4>
                        <div class="d-flex gap-2">
                            <b> 2023 VS 2024</b>
                        </div>
                    </div>
                    <div class="chart-wrapper pt-4">
                        <canvas id="audienceChart" width="" height="120"></canvas>
                    </div>
                </div>
            </div>

            <!-- Activities -->
            <div class=" col-lg-3 ">
                <div class="div-card h-100 d-flex flex-column ">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title">Activities</h4>
                    </div>

                    <div class="d-flex gap-2 activity-text mb-3">
                        <img src="{{ asset('assets/images/pp-activity.png') }}" alt="">
                        <span>Emily Johnson joined as a new subscriber</span>
                    </div>

                    <div class="d-flex gap-2 activity-text mb-3">
                        <img src="{{ asset('assets/images/pp-activity.png') }}" alt="">
                        <span>Emily Johnson joined as a new subscriber</span>
                    </div>

                    <div class="d-flex gap-2 activity-text mb-3">
                        <img src="{{ asset('assets/images/pp-activity.png') }}" alt="">
                        <span>Emily Johnson joined as a new subscriber</span>
                    </div>

                    <div class="d-flex gap-2 activity-text ">
                        <img src="{{ asset('assets/images/pp-activity.png') }}" alt="">
                        <span>Emily Johnson joined as a new subscriber</span>
                    </div>

                </div>
            </div>

            <!-- Top Traffic -->
            <div class=" col-lg-3 ">
                <div class="div-card h-100 d-flex flex-column ">
                    <div class="d-flex align-items-center mb-3">
                        <h4 class="mb-0 db-cards-title">Top Traffic</h4>
                    </div>

                    <div class="chart-wrapper">
                        <canvas id="trafficChart" width="250" height="250"></canvas>
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
                                color: '#999',
                                font: { size: 8, weight: '' }
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
                    data: [500, 102, 150, 250],
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
                                        text: `${label} : ${value}`,
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

        //Engagement metrics 

        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('audienceChart')?.getContext('2d');
            if (!ctx) return;

            const audienceChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                    datasets: [
                        {
                            label: '2023',
                            data: [10, 20, 15, 25, 30, 43, 35, 28, 18, 15, 20, 22],
                            borderColor: '#7B61FF',
                            backgroundColor: '#7B61FF',
                            tension: 0.4,
                            pointBackgroundColor: '#7B61FF',
                            pointRadius: 5,
                            pointHoverRadius: 6
                        },
                        {
                            label: '2024',
                            data: [30, 18, 22, 35, 40, 28, 38, 40, 25, 30, 32, 35],
                            borderColor: '#FF6A00',
                            backgroundColor: '#FF6A00',
                            tension: 0.4,
                            pointBackgroundColor: '#FF6A00',
                            pointRadius: 5,
                            pointHoverRadius: 6
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                pointStyle: 'circle',
                                font: { weight: 'bold' }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function (context) {
                                    return context.parsed.y + 'k';
                                }
                            },
                            backgroundColor: '#f1f1f1',
                            titleColor: '#333',
                            bodyColor: '#000',
                            displayColors: false,
                            padding: 10
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function (value) {
                                    return value + 'k';
                                },
                                color: '#666'
                            },
                            grid: { drawBorder: false }
                        },
                        x: {
                            ticks: {
                                color: '#666'
                            },
                            grid: { display: false }
                        }
                    }
                }
            });
        });

    </script>
@endpush