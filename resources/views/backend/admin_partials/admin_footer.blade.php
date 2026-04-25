 <!-- /.content-wrapper -->
         <footer class="main-footer">
            <strong>Copyright &copy; 2016-2017 <a href="#">Themem</a>.</strong> All rights reserved.
         </footer>
      </div>
      <!-- /.wrapper -->
      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
      <!-- jquery-ui --> 
      <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript">    </script>
      <!-- FastClick -->
      <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="assets/dist/js/custom.js" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Page Lavel Plugins
         =====================================================================-->
      <!-- ChartJs JavaScript -->
      <script src="assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
      <!-- Counter js -->
      <script src="assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
      <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
      <!-- Monthly js -->
      <script src="assets/plugins/monthly/monthly.js" type="text/javascript"></script>
       <!-- Flot Charts js -->
      <script src="assets/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
      <script src="assets/plugins/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
      
            <!-- table-export js -->
      <script src="assets/plugins/table-export/tableExport.js" type="text/javascript"></script>
      <script src="assets/plugins/table-export/jquery.base64.js" type="text/javascript"></script>
      <script src="assets/plugins/table-export/html2canvas.js" type="text/javascript"></script>
      <script src="assets/plugins/table-export/sprintf.js" type="text/javascript"></script>
      <script src="assets/plugins/table-export/jspdf.js" type="text/javascript"></script>
      <script src="assets/plugins/table-export/base64.js" type="text/javascript"></script>
      <!-- dataTables js -->
      <script src="assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
      <script>
         function dash() {
         // single bar chart
         var ctx = document.getElementById("singelBarChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
         datasets: [
         {
         label: "My First dataset",
         data: [40, 55, 75, 81, 56, 55, 40],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
               //monthly calender
               $('#m_calendar').monthly({
                 mode: 'event',
                 //jsonUrl: 'events.json',
                 //dataType: 'json'
                 xmlUrl: 'events.xml'
             });
         
         //bar chart
         var ctx = document.getElementById("barChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["January", "February", "March", "April", "May", "June", "July", "august", "september","october", "Nobemver", "December"],
         datasets: [
         {
         label: "My First dataset",
         data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         },
         {
         label: "My Second dataset",
         data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86],
         borderColor: "rgba(51, 51, 51, 0.55)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(51, 51, 51, 0.55)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
             //counter
             $('.count-number').counterUp({
                 delay: 10,
                 time: 5000
             });
         }
         dash();         
      </script>
<script type="text/javascript">
         //Flot charts data and options
         
         var data = [[1, 4], [2, 5], [3, 7], [4, 4], [5, 8], [6, 9], [7, 11], [8, 10], [9, 8], [10, 5], [11, 4], [12, 3]];
         
         $.plot("#flotChart1", [data], {
             series: {
                 bars: {
                     show: true,
                     lineWidth: 2,
                     align: "center",
                     fill: false
                 }
             },
             legend: {
                 show: false
             },
             grid: {
                 tickColor: "#e4e5e7",
                 borderWidth: 1,
                 borderColor: '#ddd',
                 color: '#009688'
             },
             colors: ["#009688"]
         });
         
         var data1 = [[0, 3], [1, 6], [2, 8], [3, 9], [4, 12], [5, 14], [6, 15], [7, 12],
             [8, 14], [9, 12], [10, 11], [11, 10], [12, 14], [13, 16], [14, 15], [15, 15],
             [16, 16], [17, 12], [18, 13], [19, 15], [20, 16], [21, 18], [22, 20], [23, 23],
             [24, 22], [25, 21], [26, 20], [27, 17], [28, 15], [29, 14], [30, 13], [31, 10]];
         
         var chartUsersOptions2 = {
             points: {
                 show: true,
                 fill: true,
                 lineWidth: 1,
                 fillColor: "#009688"
             },
             grid: {
                 tickColor: "#e4e5e7",
                 borderWidth: 1,
                 borderColor: '#ddd',
                 color: '#009688'
             },
             colors: ["#009688"]
         };
         
         $.plot($("#flotChart2"), [data1], chartUsersOptions2);
         
         var chartUsersOptions3 = {
             lines: {
                 show: true,
                 fill: false,
                 lineWidth: 2,
                 fillColor: "#009688"
             },
             grid: {
                 tickColor: "#e4e5e7",
                 borderWidth: 1,
                 borderColor: '#ddd',
                 color: '#009688'
             },
             colors: ["#009688"]
         };
         
         $.plot($("#flotChart3"), [data1], chartUsersOptions3);
         
         var data = [],
                 totalPoints = 300;
         
         function getRandomData() {
         
             if (data.length > 0)
                 data = data.slice(1);
         
             // Do a random walk
         
             while (data.length < totalPoints) {
         
                 var prev = data.length > 0 ? data[data.length - 1] : 50,
                         y = prev + Math.random() * 10 - 5;
         
                 if (y < 0) {
                     y = 0;
                 } else if (y > 100) {
                     y = 100;
                 }
         
                 data.push(y);
             }
         
             // Zip the generated y values with the x values
         
             var res = [];
             for (var i = 0; i < data.length; ++i) {
                 res.push([i, data[i]]);
             }
         
             return res;
         }
         
         // Set up the control widget
         
         var updateInterval = 30;
         
         var plot = $.plot("#flotChart4", [getRandomData()], {
             series: {
                 shadowSize: 0  // Drawing is faster without shadows
             },
             yaxis: {
                 min: 0,
                 max: 100
             },
             xaxis: {
                 show: false
             },
             grid: {
                 tickColor: "#e4e5e7",
                 borderWidth: 1,
                 borderColor: '#ddd',
                 color: '#009688'
             },
             colors: ["#009688"]
         });
         
         function update() {
         
             plot.setData([getRandomData()]);
         
             // Since the axes don't change, we don't need to call plot.setupGrid()
         
             plot.draw();
             setTimeout(update, updateInterval);
         }
         
         update();
         
         var data5 = [
             {
                 data: [[1, 4], [2, 5], [3, 7], [4, 4], [5, 8], [6, 9], [7, 11], [8, 10], [9, 8], [10, 5], [11, 4], [12, 3]]
             }
         ];
         
         var chartUsersOptions5 = {
             lines: {
                 show: true,
                 fill: 0.1
             },
             grid: {
                 tickColor: "#e4e5e7",
                 borderWidth: 1,
                 borderColor: '#ddd',
                 color: '#009688'
             },
             colors: ["#009688"]
         };
         
         $.plot($("#flotChart5"), data5, chartUsersOptions5);
         
         var data6 = [
             {
                 label: "bar",
                 data: [[1, 12], [2, 14], [3, 18], [4, 24], [5, 28], [6, 22], [7, 20], [8, 18], [9, 17], [10, 13], [11, 15], [12, 17]]
             }
         ];
         
         var chartUsersOptions6 = {
             lines: {
                 show: true,
                 steps: true
             },
             grid: {
                 tickColor: "#e4e5e7",
                 borderWidth: 1,
                 borderColor: '#ddd',
                 color: '#009688'
             },
             colors: ["#009688"]
         };
         
         $.plot($("#flotChart6"), data6, chartUsersOptions6);
         
         var sin = [],
                 cos = [];
         for (var i = 0; i < 14; i += 0.5) {
             sin.push([i, Math.sin(i)]);
             cos.push([i, Math.cos(i)]);
         }
         
         var data7 = [
             {data: sin, label: "sin(x)"},
             {data: cos, label: "cos(x)"}
         ];
         
         var chartUsersOptions7 = {
             series: {
                 lines: {
                     show: true
                 },
                 points: {
                     show: true
                 }
             },
             grid: {
                 tickColor: "#e4e5e7",
                 borderWidth: 1,
                 borderColor: '#ddd',
                 color: '#009688'
             },
             yaxis: {
                 min: -1.2,
                 max: 1.2
             },
             colors: ["#009688", "#efefef"]
         }
         ;
         
         $.plot($("#flotChart7"), data7, chartUsersOptions7);
         
         var data8 = [
             {label: "Data 1", data: 16, color: "#009688"},
             {label: "Data 2", data: 6, color: "#405f72"},
             {label: "Data 3", data: 22, color: "#82adc8"},
             {label: "Data 4", data: 32, color: "#139ff8"}
         ];
         
         var chartUsersOptions8 = {
             series: {
                 pie: {
                     show: true
                 }
             },
             grid: {
                 hoverable: true
             },
             tooltip: true,
             tooltipOpts: {
                 content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                 shifts: {
                     x: 20,
                     y: 0
                 },
                 defaultTheme: false
             }
         };
         
         $.plot($("#flotChart8"), data8, chartUsersOptions8);
         
      </script>
      <script>
         $(document).ready(function () {
             function chartlist() {
             "use strict"; // Start of use strict
         
             //bar chart
             var ctx = document.getElementById("barChart");
             var myChart = new Chart(ctx, {
                 type: 'bar',
                 data: {
                     labels: ["January", "February", "March", "April", "May", "June", "July"],
                     datasets: [
                         {
                             label: "My First dataset",
                             data: [65, 59, 80, 81, 56, 55, 40],
                             borderColor: "rgba(0, 150, 136, 0.76)",
                             borderWidth: "0",
                             backgroundColor: "rgba(0, 150, 136, 0.76)"
                         },
                         {
                             label: "My Second dataset",
                             data: [28, 48, 40, 19, 86, 27, 90],
                             borderColor: "rgba(0, 150, 136, 0.76)",
                             borderWidth: "0",
                             backgroundColor: "rgba(0, 150, 136, 0.76)"
                         }
                     ]
                 },
                 options: {
                     scales: {
                         yAxes: [{
                                 ticks: {
                                     beginAtZero: true
                                 }
                             }]
                     }
                 }
             });
         
             //radar chart
             var ctx = document.getElementById("radarChart");
             var myChart = new Chart(ctx, {
                 type: 'radar',
                 data: {
                     labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
                     datasets: [
                         {
                             label: "My First dataset",
                             data: [65, 59, 66, 45, 56, 55, 40],
                             borderColor: "rgba(0, 150, 136, 0.76)",
                             borderWidth: "1",
                             backgroundColor: "rgba(0, 150, 136, 0.76)"
                         },
                         {
                             label: "My Second dataset",
                             data: [28, 12, 40, 19, 63, 27, 87],
                             borderColor: "rgba(55, 160, 0, 0.7",
                             borderWidth: "1",
                             backgroundColor: "rgba(0, 150, 136, 0.98)"
                         }
                     ]
                 },
                 options: {
                     legend: {
                         position: 'top'
                     },
                     scale: {
                         ticks: {
                             beginAtZero: true
                         }
                     }
                 }
             });
         
             //line chart
             var ctx = document.getElementById("lineChart");
             var myChart = new Chart(ctx, {
                 type: 'line',
                 data: {
                     labels: ["January", "February", "March", "April", "May", "June", "July"],
                     datasets: [
                         {
                             label: "My First dataset",
                             borderColor: "rgba(0,0,0,.09)",
                             borderWidth: "1",
                             backgroundColor: "rgba(0,0,0,.07)",
                             data: [22, 44, 67, 43, 76, 45, 12]
                         },
                         {
                             label: "My Second dataset",
                             borderColor: "rgba(0, 150, 136, 0.76)",
                             borderWidth: "1",
                             backgroundColor: "rgba(0, 150, 136, 0.76)",
                             pointHighlightStroke: "rgba(26,179,148,1)",
                             data: [16, 32, 18, 26, 42, 33, 44]
                         }
                     ]
                 },
                 options: {
                     responsive: true,
                     tooltips: {
                         mode: 'index',
                         intersect: false
                     },
                     hover: {
                         mode: 'nearest',
                         intersect: true
                     }
         
                 }
             });
         
             //pie chart
             var ctx = document.getElementById("pieChart");
             var myChart = new Chart(ctx, {
                 type: 'pie',
                 data: {
                     datasets: [{
                             data: [45, 25, 20, 10],
                             backgroundColor: [
                                 "#084368cc",
                                 "#169398",
                                 "#b2c917cc",
                                 "#c98217cc"
                             ],
                             hoverBackgroundColor: [
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0,0,0,0.07)"
                             ]
         
                         }],
                     labels: [
                         "#009688",
                         "#009688",
                         "#009688"
                     ]
                 },
                 options: {
                     responsive: true
                 }
             });
         
             //doughut chart
             var ctx = document.getElementById("doughutChart");
             var myChart = new Chart(ctx, {
                 type: 'doughnut',
                 data: {
                     datasets: [{
                             data: [45, 25, 20, 10],
                             backgroundColor: [
                                 "rgba(0, 150, 136, 0.76)",
                                 "#30a44ae6",
                                 "#290d69e6",
                                 "#169398"
                             ],
                             hoverBackgroundColor: [
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0,0,0,0.07)"
                             ]
         
                         }],
                     labels: [
                         "#009688",
                         "#009688",
                         "#009688",
                         "#009688"
                     ]
                 },
                 options: {
                     responsive: true
                 }
             });
         
             //polar chart
             var ctx = document.getElementById("polarChart");
             var myChart = new Chart(ctx, {
                 type: 'polarArea',
                 data: {
                     datasets: [{
                             data: [15, 18, 9, 6, 19],
                             backgroundColor: [
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0, 150, 136, 0.76)",
                                 "rgba(0,0,0,0.2)",
                                 "rgba(0, 150, 136, 0.76)"
                             ]
         
                         }],
                     labels: [
                         "#009688",
                         "#009688",
                         "#009688",
                         "#009688"
                     ]
                 },
                 options: {
                     responsive: true
                 }
             });
         
             // single bar chart
             var ctx = document.getElementById("singelBarChart");
             var myChart = new Chart(ctx, {
                 type: 'bar',
                 data: {
                     labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
                     datasets: [
                         {
                             label: "My First dataset",
                             data: [40, 55, 75, 81, 56, 55, 40],
                             borderColor: "#009688",
                             borderWidth: "0",
                             backgroundColor: "rgba(0, 150, 136, 0.76)"
                         }
                     ]
                 },
                 options: {
                     scales: {
                         yAxes: [{
                                 ticks: {
                                     beginAtZero: true
                                 }
                             }]
                     }
                 }
             });
          }
          chartlist();
         });
         
      </script>
      <script>
         $(document).ready(function () {
             //nestable
             var updateOutput = function (e)
             {
                 var list = e.length ? e : $(e.target),
                         output = list.data('output');
                 if (window.JSON) {
                     output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                 } else {
                     output.val('JSON browser support required for this demo.');
                 }
             };
         
             // activate Nestable for list 1
             $('#nestable').nestable({
                 group: 1
             })
                     .on('change', updateOutput);
         
             // activate Nestable for list 2
             $('#nestable2').nestable({
                 group: 1
             })
                     .on('change', updateOutput);
         
             // output initial serialised data
             updateOutput($('#nestable').data('output', $('#nestable-output')));
             updateOutput($('#nestable2').data('output', $('#nestable2-output')));
         
             $('#nestable-menu').on('click', function (e)
             {
                 var target = $(e.target),
                         action = target.data('action');
                 if (action === 'expand-all') {
                     $('.dd').nestable('expandAll');
                 }
                 if (action === 'collapse-all') {
                     $('.dd').nestable('collapseAll');
                 }
             });
         
             $('#nestable3').nestable();
         
         });
      </script>

   </body>
</html>

