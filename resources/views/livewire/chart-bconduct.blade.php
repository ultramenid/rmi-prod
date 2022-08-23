<div class="bgrmi">
    <div id="chart"></div>


</div>
@push('scripts')
    <script>
        var corporatedata = JSON.parse('<?php echo $corporateData  ?>');
        // console.log(corporatedata);
        var options = {
          series: [{
            name: 'Business Execution %' ,
            type: 'bar',
            data: corporatedata.bExecution,
          }, {
            name: 'Average %',
            type: 'line',
            data: corporatedata.bAverage,
          },{
            name: 'B-ALL',
            type: 'area',
            data: corporatedata.bAll,
          }],

          chart: {
            id: 'bconduct',
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
          colors:['#835640', '#32a86d', '#32a86d'],
          fill: {
            colors: ['#835640', '#32a86d', '#32a86d'],
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
              type: 'dec',
              categories: corporatedata.name
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
            shared: true,
            intersect: false,
            theme: "dark",
            y: {
              formatter: function (value) {
                return value.toFixed(2);
              }
            },
          }
        };
        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@endpush
