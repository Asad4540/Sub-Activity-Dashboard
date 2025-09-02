@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-end gap-2 mb-3">
            <button class="btn-secondary" style="padding:0 !important">Export &nbsp;<i class="bi bi-arrow-down-square"
                    style="color:var(--btn-primary-color)"></i></button>
            <button class="btn-primary" onclick="window.location.href='{{ route('profileEdit') }}'">Edit &nbsp; <i
                    class="bi bi-pencil-square" style="color:#fff"></i> </button>
        </div>

        <div class="mt-2">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card mt-4">
                        <p class="settings-title p-4">
                            Subscriber Profile
                        </p>
                        <div class="d-flex justify-content-around">
                            <div>
                                <img src="{{ asset('assets/images/admin.png') }}" alt="" class="mb-2 img-fluid">
                                <p class="input-text text-center m-0 p-0">Alexa Fein</p>
                                <p class="settings-sub-title text-center">Admin, Vgen</p>
                            </div>
                            <div>
                                <p class="activity-text m-0 p-0">Company Name</p>
                                <p class="input-text">Backlinks</p>

                                <p class="activity-text m-0 p-0">Company Email</p>
                                <p class="input-text">alexa.feinn@backlinks.com</p>

                                <p class="activity-text m-0 p-0">LinkedIn Profile</p>
                                <p class="input-text">www.linkedin.com/alexa-feinn</p>
                            </div>
                            <div>
                                <p class="activity-text m-0 p-0">Login Method</p>
                                <p class="input-text">LinkedIn</p>


                                <p class="activity-text m-0 p-0">Publisher Source</p>
                                <p class="input-text">IT Tech</p>

                                <p class="activity-text m-0 p-0">Industry (optional)</p>
                                <p class="input-text">Marketing agency</p>
                            </div>
                            <div>
                                <p class="activity-text m-0 p-0">Signup Date</p>
                                <p class="input-text">20 March 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="card  mt-4">
                        <p class="settings-title p-4">
                            Content Interaction Summary 
                        </p>
                        <div class="row d-flex justify-content-around mb-5">
                            <div class="col-lg-3 d-flex gap-3 px-3 py-2 content-interaction-box"
                                style="background:#E6FFEFCF">
                                <div>
                                    <img src="{{ asset('assets/images/editgreen.png') }}" class="img-fluid" alt="">
                                </div>
                                <div>
                                    <span class="input-text">Articals Read</span> <br>
                                    <span class="settings-title">52</span>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex gap-3 px-3 py-2 content-interaction-box" style="background:#F9EBED">
                                <div>
                                    <img src="{{ asset('assets/images/clock.png') }}" class="img-fluid" alt="">
                                </div>
                                <div>
                                    <span class="input-text">Total Time Spend</span> <br>
                                    <span class="settings-title">5h 2min</span>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex gap-3 px-3 py-2 content-interaction-box" style="background:#F8F4FC">
                                <div>
                                    <img src="{{ asset('assets/images/note.png') }}" class="img-fluid" alt="">
                                </div>
                                <div>
                                    <span class="input-text">Whitepapers</span> <br>
                                    <span class="settings-title">82</span>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-evenly gap-2 mb-5">
                            <div class="col-lg-5 h-100 rounded" style="background:#F4F5F9">
                                <p class="input-text py-2">Top Categories engaged</p>
                                <div class="">
                                    <canvas id="DeviceChart" width="250px" height="210px"></canvas>
                                </div>
                            </div>
                            <div class="col-lg-5 h-100 rounded" style="background:#F4F5F9">
                                <p class="input-text py-2">Content Type Interaction</p>
                                <div class="chart-wrapper d-flex justify-content-center">
                                    <canvas id="contentChart" class="traffic"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 gap-4">
                        <div class="col-lg card mt-4">
                            <p class="settings-title p-4">
                                Device & Login Info
                            </p>
                            <div class="row px-3 d-flex justify-content-around gap-3 mb-4">
                                <div class="col-lg-5 d-flex border border-1 rounded p-2 gap-2">
                                    <div>
                                        <img src="{{ asset('assets/images/device1.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <span class="activity-text">Device</span> <br>
                                        <span class="input-text">Desktop</span>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-flex border border-1 rounded p-2 gap-2">
                                    <div>
                                        <img src="{{ asset('assets/images/device2.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <span class="activity-text">Browser</span> <br>
                                        <span class="input-text">Chrome 120</span>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-flex border border-1 rounded p-2 gap-2">
                                    <div>
                                        <img src="{{ asset('assets/images/device3.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <span class="activity-text">Location</span> <br>
                                        <span class="input-text">SA Francisco</span>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-flex border border-1 rounded p-2 gap-2">
                                    <div>
                                        <img src="{{ asset('assets/images/device4.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div>
                                        <span class="activity-text">Login method</span> <br>
                                        <span class="input-text">Linkedin SSO</span>
                                    </div>
                                </div>

                            </div>
                            <div class="px-3">
                                <div class="rounded mb-4" style="background:#F9FAFB">
                                    <div class="d-flex justify-content-between px-3">
                                        <p class="input-text">Last Login</p>
                                        <p class="activity-text">Today 9:00am</p>
                                    </div>
                                    <div class="d-flex justify-content-between px-3">
                                        <p class="input-text">Session Count</p>
                                        <p class="activity-text">6 Sessions</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg card  mt-4">
                            <p class="settings-title p-4">
                                Engagement Score
                            </p>
                            <div class="gauge-chart-wrapper d-flex justify-content-center">
                                <canvas id="GaugeChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card  mt-4">
                        <p class="settings-title p-4">
                            Recently Viewed
                        </p>
                    </div>
                    <div class="card  mt-4">
                        <p class="settings-title p-4">
                            Smart Recommendation
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection




@push('scripts')

    <script>
        //  Content Type Chart 
        const ctx = document.getElementById('contentChart').getContext('2d');
        const contentChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Articles', 'Whitepapers', 'Events', 'Webinars'],
                datasets: [{
                    data: [50, 10, 15, 25],
                    backgroundColor: [
                        '#66b3ff',
                        '#9de5d5',
                        '#a68bf6',
                        '#ffb454'
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

        //Device Chart 
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('DeviceChart')?.getContext('2d');
            if (!ctx) {
                console.warn('Canvas element with ID "DeviceChart" not found!');
                return;
            }

            const labels = [
                'AI/ML',
                'Backup & DR',
                'Cloud Tech',
                'IT',
                'Data Security',
                'Infrastructure',
                'Cybersecurity',
                'DevOps'
            ];

            const DeviceChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
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
                    responsive: true,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: '#999',
                                callback: function (value) {
                                    return value + '%';
                                }
                            },
                            grid: {
                                display: false,
                                drawBorder: false
                            }

                        },
                        x: {
                            ticks: {
                                color: '#999',
                                font: {
                                    size: 7,
                                    weight: ''
                                },
                                maxRotation: 0,
                                minRotation: 0,
                                callback: function (value, index, ticks) {
                                    const label = labels[index];
                                    // Auto-wrap long labels by space
                                    return label.length > 10 ? label.split(' ') : label;
                                }
                            },
                            grid: {
                                display: false,
                                drawBorder: false
                            }
                        }
                    }
                }
            });
        });

        //Engagement Guage
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('GaugeChart')?.getContext('2d');
            if (!ctx) {
                console.warn('Canvas element with ID "GaugeChart" not found!');
                return;
            }

            const score = 82;

            const GaugeChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Cold (0–39)', 'Warm (40–74)', 'Hot (75+)'],
                    datasets: [{
                        data: [40, 40, 60], // Segments (customize for proportions)
                        backgroundColor: ['#6aa9ff', '#f7c948', '#ff7b54'],
                        borderWidth: 2,
                        cutout: '70%',
                        rotation: -90,
                        circumference: 180
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                pointStyle: 'circle'
                            }
                        },
                        tooltip: { enabled: false }
                    }
                },
                plugins: [{
                    // Draw center text
                    id: 'centerText',
                    afterDraw(chart) {
                        const { width } = chart;
                        const { height } = chart;
                        const ctx = chart.ctx;
                        ctx.save();
                        ctx.font = 'bold 24px Arial';
                        ctx.fillStyle = '#333';
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'middle';
                        ctx.fillText(score + '+', width / 2, height / 1.5);
                    }
                }, {
                    // Needle plugin
                    id: 'needle',
                    afterDatasetDraw(chart) {
                        const { ctx, chartArea: { width, height } } = chart;
                        const angle = Math.PI + (score / 100) * Math.PI; // Map 0–100 to 180°
                        const cx = width / 2;
                        const cy = height - 1;

                        ctx.save();
                        ctx.translate(cx, cy);
                        ctx.rotate(angle);
                        ctx.beginPath();
                        ctx.moveTo(0, -5);
                        ctx.lineTo(height * 0.45, 0);
                        ctx.lineTo(0, 5);
                        ctx.fillStyle = '#555';
                        ctx.fill();
                        ctx.restore();

                        // Draw needle center circle
                        ctx.beginPath();
                        ctx.arc(cx, cy, 10, 0, 2 * Math.PI);
                        ctx.fillStyle = '#777';
                        ctx.fill();
                        ctx.beginPath();
                        ctx.arc(cx, cy, 5, 0, 2 * Math.PI);
                        ctx.fillStyle = '#fff';
                        ctx.fill();
                    }
                }]
            });
        });

    </script>

@endpush