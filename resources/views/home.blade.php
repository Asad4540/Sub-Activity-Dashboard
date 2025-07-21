@extends('layouts.app')

@section('content')

    <style>
        body {
            background-color: #F8FAFD;
        }

        .card {
            width: 100%;
            /* height: 114px; */
            flex-shrink: 0;
            stroke-width: 1px;
            stroke: #D9E1E7CC;
            border-radius: 1rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            margin: 0 auto;
        }

        .summary-card-icon {
            width: 58px;
            height: 58px;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .icon-blue {
            background-color: #0090FF33;
        }

        .icon-pink {
            background-color: #DB5AEE33;
        }

        .icon-yellow {
            background-color: #F9B95933;
        }

        .icon-green {
            background-color: #1AD59833;
        }

        h5 {
            color: #06152B;
            font-family: Poppins;
            font-size: 34px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .subtext {
            color: #809FB8;
            font-family: Poppins;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .percent-text {
            color: #1AD598;
            font-family: Poppins;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            margin-top: 3rem;
        }

        .bi-send {
            color: #0090FF !important;
        }

        .bi-list {
            color: #DB5AEE !important;
        }

        .bi-check-circle {
            color: #F9B959 !important;
        }

        .bi-arrow-repeat {
            color: #1AD598 !important;
        }

        /* ********************************* */
        .dashboard-card {
            /* width: 896px; */
            height: 527px;
            flex-shrink: 0;
            border-radius: 20px;
            border: 1px solid #D9E1E7;
            background: var(--Secondary-Primary-White, #FFF);
            box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.16);
        }

        .recentTitle {
            color: #06152B;
            font-family: Poppins;
            font-size: 22px;
            font-style: normal;
            font-weight: 500;
            line-height: 32px;
            /* 145.455% */
            letter-spacing: -0.44px;
        }

        .header-section .dropdown {
            color: var(--Text-Color-Secondary, #A3AED0);
            font-family: "DM Sans";
            font-size: 12px !important;
            font-style: normal;
            font-weight: 700;
            line-height: 20px;
            /* 166.667% */
            letter-spacing: -0.24px;
            /* width: 79px; */
            height: 21px;
            flex-shrink: 0;
        }

        .bi-caret-down-fill {
            font-size: 10px !important;
            margin-top: 3px;
        }

        .table> :not(caption)>*>* {
            background-color: #fff !important;
            text-align: center;
        }

        .table th {
            color: var(--Text-Color-Secondary, #A3AED0);
            font-family: Poppins;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 24px;
            /* 171.429% */
            letter-spacing: -0.28px;
            text-transform: capitalize;
            border-bottom: 1px solid #E9EDF7;
        }

        .table th .rfp-id {
            text-transform: capitalize;
        }

        .table td {
            color: #06152B;
            font-family: Poppins;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 24px;
            /* 171.429% */
            letter-spacing: -0.28px;

        }

        .status-completed {
            background-color: #A3EED6;
            color: #1AD598;
        }

        .status-review {
            background-color: #FFECB2;
            color: #DBA400;
        }

        .status-submitted {
            background-color: #B3DEFF;
            color: #0090FF;
        }

        .status-draft {
            background-color: #E8E8E8;
            color: #969696;
        }

        .status-archived {
            background-color: #E3C0F2;
            color: #78219D;
        }

        .status-cancelled {
            background-color: #FFB3B3;
            color: #FF0000;
        }

        .badge-custom {
            font-size: 0.75rem;
            font-weight: 500;
            padding: 0.375rem 0.75rem;
            border-radius: 6px;
        }

        .header-section {
            padding: 1.5rem 1.5rem 0;
        }

        .table-container {
            background-color: #FFF;
            padding: 2.5rem 1.5rem 1.5rem;
        }

        .rfpSubmitText {
            color: #06152B;
            font-family: Poppins;
            font-size: 22px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .chart-container {
            stroke-width: 1px;
            stroke: rgba(217, 225, 231, 0.80);
            border: 1px solid #D9E1E7CC;
            border-radius: 20px;
            padding: 1.5rem;
            /* width: 598px; */
            height: 527px;
            flex-shrink: 0;
        }

        .chart-wrapper {
            position: relative;
            padding-top: 1.5rem;
            /* width: 505.492px; */
            height: 430px;
        }

        @media (max-width: 992px) {
            .chart-container {
                height: 350px;
                padding: 1rem;
            }
        }

        @media (max-width: 768px) {
            .table-responsive {
                font-size: 0.875rem;
            }

            .table th,
            .table td {
                padding: 0.75rem 0.5rem;
            }

            .header-section {
                padding: 1rem 1rem 0;
            }

            .table-container {
                padding: 0 1rem 1rem;
            }

            .chart-container {
                height: 300px;
                padding: 1rem;
            }
        }
    </style>

    <div class="container-fluid">
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