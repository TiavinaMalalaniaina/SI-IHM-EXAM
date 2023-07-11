 
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
            <h2>Effectifs retenus</h2>
            <div class="chart" id="chart1"></div>
        </div>
        
         
        
        <div class="widget">
            <h2>Evolution du nombre de Visite du Site</h2>
            <div class="chart" id="chart3"></div>
        </div>
        
        <div class="widget">
            <h2>Statistique Caisse</h2>
            <div class="chart" id="chart4"></div>
        </div>
    </div>
    
    <script>
        // Exemple d'initialisation des graphiques avec ApexCharts
        document.addEventListener("DOMContentLoaded", function(event) {
            // Widget 1 - Graphique à secteurs (pie chart)
            var chart1Options = {
                series: <?php echo json_encode($valeur); ?>,
                labels: ['PRISE DE POIDS', 'PERTE DE POIDS'],
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
 
             

            // Widget 3 - Graphique en ligne (line chart)
            var chart3Options = {
                series: [{
                    name: 'Client',
                    data:<?php echo json_encode($user); ?>
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
                    categories:<?php echo json_encode($userdate);?>,
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
                        text: 'Personnes'
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
                    name: 'Caisse',
                    data: <?php echo json_encode($stat); ?>
                }],
                chart: {
                    height: 350,
                    type: 'area',
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width:1
                },
                xaxis: {
                    categories: <?php echo json_encode($daty);?>,
                },
                yaxis: {
                    title: {
                        text: 'Caisse'
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
