<div class="bgrmi">
    <div id="chart2"></div>


</div>
@push('scripts')
    <script>
        var corporatedata = JSON.parse('<?php echo $corporateData ?>')
        // console.log(corporatedata)
        var options = {
          series: [{
            name: 'Environmental Responsibility %' ,
            type: 'bar',
            data: corporatedata.eResponsibility,
          }, {
            name: 'Average %',
            type: 'line',
            data: corporatedata.eAverage,
          },{
            name: 'F-ALL',
            type: 'area',
            data: corporatedata.fAll,
          }],

          chart: {
            id: 'erespon',
            group: 'charts',
            foreColor: 'gray',
            width: '100%',
            height: 450,
            type: 'line',
            stacked: false,
            toolbar: {
              show: true,
              offsetX: 0,
              offsetY: 0,
              tools: {
              download: true,
              selection: false,
              reset: false,
              zoom: false,
              zoomin: false,
              zoomout: false,
              pan: false
              },
            },

          },
          stroke: {
            width: [0, 2, 5],
            curve: 'smooth'
          },
          plotOptions: {
            bar: {
              columnWidth: '50%'
            }
          },
          colors:['#72bf44', '#835640', '#835640'],
          fill: {
            colors: ['#72bf44', '#835640', '#835640'],
            gradient: {
              inverseColors: false,
              shade: 'light',
              type: "vertical",
              opacityFrom: 0.85,
              opacityTo: 0.55,
              stops: [0, 100, 100, 100]
            }
          },
          markers: {
            size: 0
          },
          labels:corporatedata.name,
          xaxis: {
              type: 'category',
              categories: []
          },
          yaxis: {
            type: 'string',
            labels: {
              minWidth: 40,
              formatter: function (value) {
                return value + "%";
              }
            },
            min: 0,
            max: 100
          },
          tooltip: {
            intersect: false,
            theme: "dark",
            y: {
              formatter: function (value) {
                return value.toFixed(2);
              }
            },
          }
        };
        var chart = new ApexCharts(document.querySelector("#chart2"), options);
        chart.render();
    </script>
@endpush
