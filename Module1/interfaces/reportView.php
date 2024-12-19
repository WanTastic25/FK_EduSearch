<!DOCTYPE html>
<html>
    <head>
    
    <link rel="stylesheet" href="..\stylesheet\reportStyle.css">
    <?php include '../layout.php'?>

    <?php
      $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
      mysqli_select_db($link, "fk_edusearch_db") or die(mysqli_error());

      $query = "select count(*) as total from alluser where userType='general'";
      $result = mysqli_query($link, $query);
      $row = mysqli_fetch_assoc($result);
      $totalGeneral = (int)$row["total"];

      $query = "select count(*) as total from alluser where userType='expert'";
      $result = mysqli_query($link, $query);
      $row = mysqli_fetch_assoc($result);
      $totalExpert = (int)$row["total"];

      $query = "select count(*) as total from alluser where userType='admin'";
      $result = mysqli_query($link, $query);
      $row = mysqli_fetch_assoc($result);
      $totalAdmin = (int)$row["total"];
    ?>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            var x = <?php echo $totalGeneral ?>;
            var y = <?php echo $totalExpert ?>;
            var z = <?php echo $totalAdmin ?>;

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                ['User Type', 'Number of Users'],
                ['General', x],
                ['Expert', y],
                ['Admin', z]
        ]);

        var options = {
          title: 'Total Users'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    </head>
    
    <body>
      <div id="piechart" class="piechart" style="width: 900px; height: 500px;"></div>
      <div id="curve_chart" class="curvechart" style="width: 900px; height: 500px"></div>
    </body>
</html>