<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <!-- BAR CHART -->
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Intimate', 'Workplace', 'Expert Intervention', 'Competitive'],
          ['2004',  1,			1,	     	2,                  2],
          ['2005',  1,			2,          2,                  3],
          ['2006',  2,			0,			1,                  2],
          ['2007',  2,			1,          2,                  3],
	 	  ['2008',  4,			2,          2,                  0]
        ]);

        var options = {
          title: 'Number Reality TV Categories by Year',
          hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div_bar'));
        chart.draw(data, options);
      }
    </script>
    <!-- PIE CHART -->
       <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Initmate', 30],
          ['Workplace', 21],
          ['Expert Intervention', 18],
          ['Competitive', 20]
        ]);

        // Set chart options
        var options = {'title':'Reality TV Categories 1973-Present',
                       'width':800,
                       'height':600};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div_pie'));
        chart.draw(data, options);
      }
    </script>
<!-- PIE CHART WITH FILTER/RANGE -->
 <script type="text/javascript">

      // Load the Visualization API and the controls package.
      google.load('visualization', '1.0', {'packages':['controls']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawDashboard);

      // Callback that creates and populates a data table,
      // instantiates a dashboard, a range slider and a pie chart,
      // passes in the data and draws it.
      function drawDashboard() {

        // Create our data table.
        var data = google.visualization.arrayToDataTable([
          ['Years', 'Reality TV Categories by Year'],
          ['Intimate' , 5],
          ['Workplace', 7],
          ['Expert Intervention', 3],
          ['Competitve', 2]
        ]);

        // Create a dashboard.
        var dashboard = new google.visualization.Dashboard(
            document.getElementById('dashboard_div'));

        // Create a range slider, passing some options
        var rtvRangeSlider = new google.visualization.ControlWrapper({
          'controlType': 'NumberRangeFilter',
          'containerId': 'filter_div',
          'options': {
            'filterColumnLabel': 'Years'
          }
        });

        // Create a pie chart, passing some options
        var pieChart = new google.visualization.ChartWrapper({
          'chartType': 'PieChart',
          'containerId': 'chart_div',
          'options': {
            'width': 600,
            'height': 600,
            'pieSliceText': 'value',
            'legend': 'right'
          }
        });

        // Establish dependencies, declaring that 'filter' drives 'pieChart',
        // so that the pie chart will only display entries that are let through
        // given the chosen slider range.
        dashboard.bind(donutRangeSlider, pieChart);

        // Draw the dashboard.
        dashboard.draw(data);
      }
    </script>
</head>
  <body>
  
    <!-- BAR CHART -->   
    <div id="chart_div_bar" style="width: 900px; height: 500px;"></div>
   
    <!-- SIMPLE PIE CHART -->    
    <div id="chart_div_pie"></div>
   
    <!-- PIRE CHART WITH FILTER AND RANGE -->   
    <div id="dashboard_div">
      <!--Divs that will hold each control and chart-->
      <div id="filter_div"></div>
      <div id="chart_div"></div>
    </div>
  </body>
</html>
