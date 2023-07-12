<!DOCTYPE html>
<html>
<head>
    <title>Tableau de bord</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        .dashboard {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .widget {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 5px;
        }
        
        h2 {
            margin-top: 0;
        }
        
        p {
            margin-bottom: 0;
        }
        
        .chart {
            width: 100%;
            height: 300px;
        }
    </style>
    <!-- Inclure les librairies pour les graphiques -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
    <div class="dashboard">
        <div class="widget">
            <h2>Widget 1</h2>
            <div class="chart" id="chart1"></div>
        </div>
        
        <div class="widget">
            <h2>Widget 2</h2>
            <div class="chart" id="chart2"></div>
        </div>
        
        <div class="widget">
            <h2>Widget 3</h2>
            <div class="chart" id="chart3"></div>
        </div>
        
        <div class="widget">
            <h2>Widget 4</h2>
            <div class="chart" id="chart4"></div>
        </div>
    </div>
    
    <script>
        // Exemple d'initialisation des graphiques avec ApexCharts
        document.addEventListener("DOMContentLoaded", function(event) {
            // Widget 1 - Graphique à secteurs (pie chart)
            var chart1Options = {
                series: [44, 55, 13, 33],
                labels: ['A', 'B', 'C', 'D'],
                chart: {
                    type: 'pie',
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };
            var chart1 = new ApexCharts(document.querySelector("#chart1"), chart1Options);
            chart1.render();

            // Widget 2 - Graphique en barres (bar chart)
            var chart2Options = {
                series: [{
                    name: 'Series 1',
                    data: [30, 40, 45, 50, 49, 60, 70, 91, 125]
                }],
                chart: {
                    type: 'bar',
                    height: 350,
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                },
                yaxis: {
                    title: {
                        text: 'Points'
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return val + " points";
                        }
                    }
                }
            };
            var chart2 = new ApexCharts(document.querySelector("#chart2"), chart2Options);
            chart2.render();

            // Widget 3 - Graphique en ligne (line chart)
            var chart3Options = {
                series: [{
                    name: 'Series 1',
                    data: [30, 40, 45, 50, 49, 60, 70, 91, 125]
                }],
                chart: {
                    height: 350,
                    type: 'line',
                },
                stroke: {
                    width: 7,
                    curve: 'smooth'
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                },
                markers: {
                    size: 5,
                    strokeWidth: 3,
                    fillOpacity: 0,
                    strokeOpacity: 0,
                    hover: {
                        size: 7
                    }
                },
                yaxis: {
                    title: {
                        text: 'Points'
                    }
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return val + " points";
                        }
                    }
                }
            };
            var chart3 = new ApexCharts(document.querySelector("#chart3"), chart3Options);
            chart3.render();

            // Widget 4 - Graphique à aires (area chart)
            var chart4Options = {
                series: [{
                    name: 'Series 1',
                    data: [30, 40, 25, 50, 49, 60, 70, 91, 125]
                }],
                chart: {
                    height: 350,
                    type: 'area',
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                },
                yaxis: {
                    title: {
                        text: 'Points'
                    }
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return val + " points";
                        }
                    }
                }
            };
            var chart4 = new ApexCharts(document.querySelector("#chart4"), chart4Options);
            chart4.render();
        });
    </script>
</body>
</html>
