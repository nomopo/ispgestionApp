<?php
    include("./assets/api/tarifas.php");
    ?>

<div class="graficas">
  <div id="chart1" name="chart1" width="50%"></div>
  <div id="chart2" name="chart2" width="50%"></div>
    <script>
    var options1 = {
      series: [<?= $consumido; ?>],
      chart: {
        height: 180,
        width: 250,
        type: 'radialBar',
        offsetY: -13
      },  
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          dataLabels: {
            name: {
              fontSize: '12px',
              color: '#10B0E6',
              offsetY: 18
            },
            value: {
              offsetY: 76,
              fontSize: '22px',
              color: '#10B0E6',
              offsetY: -20,
              formatter: function (val) {
                return val + "%";
              }
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
            shade: 'dark',
            shadeIntensity: 0.15,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 50, 65, 91]
        },
      },
      stroke: {
        dashArray: 4
      },
      labels: ['<?= $totalGastado; ?>Gb de <?= $operador; ?>Gb'],
    };

    var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
    chart1.render();

    var options2 = {
      series: [<?= $costeExtra; ?>],
      chart: {
        height: 180,
        width: 250,
        type: 'radialBar',
        offsetY: -13
      },
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          dataLabels: {
            name: {
              fontSize: '12px',
              color: '#10B0E6',
              offsetY: 10
            },
            value: {
              offsetY: 76,
              fontSize: '22px',
              color: '#10B0E6',
              offsetY: -20,
              formatter: function (val) {
                return val + "€";
              }
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
            shade: 'dark',
            shadeIntensity: 0.15,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 50, 65, 91]
        },
      },
      stroke: {
        dashArray: 4
      },
      labels: ['<?= $costeExtra; ?> extras'],
    };

    var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
    chart2.render();
    </script>
  </div>
</div>
