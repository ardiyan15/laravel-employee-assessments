@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container">

            <h1>Dashboard</h1>
            <div class="row">
                <div class="col-md-6">
                    <canvas id="userChart" class="rounded shadow"></canvas>
                </div>
                <div class="col-md-6">
                    <canvas id="contractChart" class="rounded shadow"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        let employeeData = JSON.parse(`<?php echo $result; ?>`)
        let contractData = JSON.parse(`<?php echo $contracts; ?>`)

        console.log(contractData)
        console.log(employeeData)

        var ctx = document.getElementById('userChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',
            // The data for our dataset
            data: {
                labels: employeeData.gender,
                datasets: [{
                    label: 'Chart Karyawan by Gender',
                    data: employeeData.total_employee,
                }, ]
            },
            // Configuration options go here
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            callback: function(value) {
                                if (value % 1 === 0) {
                                    return value;
                                }
                            }
                        },
                        scaleLabel: {
                            display: false
                        }
                    }]
                },
                legend: {
                    labels: {
                        // This more specific font property overrides the global property
                        fontColor: '#122C4B',
                        fontFamily: "'Muli', sans-serif",
                        padding: 25,
                        boxWidth: 25,
                        fontSize: 14,
                    }
                },
                layout: {
                    padding: {
                        left: 10,
                        right: 10,
                        top: 0,
                        bottom: 10
                    }
                }
            }
        });

        var ctx = document.getElementById('contractChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',
            // The data for our dataset
            data: {
                labels: contractData.contract,
                datasets: [{
                    label: 'Chart Karyawan by Kontrak',
                    data: contractData.total,
                }, ]
            },
            // Configuration options go here
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            callback: function(value) {
                                if (value % 1 === 0) {
                                    return value;
                                }
                            }
                        },
                        scaleLabel: {
                            display: false
                        }
                    }]
                },
                legend: {
                    labels: {
                        // This more specific font property overrides the global property
                        fontColor: '#122C4B',
                        fontFamily: "'Muli', sans-serif",
                        padding: 25,
                        boxWidth: 25,
                        fontSize: 14,
                    }
                },
                layout: {
                    padding: {
                        left: 10,
                        right: 10,
                        top: 0,
                        bottom: 10
                    }
                }
            }
        });
    </script>
@endpush
