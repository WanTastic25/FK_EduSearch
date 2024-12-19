<?php
    session_start(); 
    $id = $_SESSION['userID'];

     $connection = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($connection, 'fk_edusearch_db');

     $query = "SELECT COUNT(*) as totalSoftware from question where question_category='Software Engineering'";
     $result = mysqli_query($connection, $query);
     $value = mysqli_fetch_assoc($result);
     $totalSoftware=$value['totalSoftware'];

     $query = "SELECT COUNT(*) as totalCG from question where question_category='Computer Graphic'";
     $result = mysqli_query($connection, $query);
     $value = mysqli_fetch_assoc($result);
     $totalCG=$value['totalCG'];

     $query = "SELECT COUNT(*) as totalNetwork from question where question_category='Computer System and Networking'";
     $result = mysqli_query($connection, $query);
     $value = mysqli_fetch_assoc($result);
     $totalNetwork=$value['totalNetwork'];

     $query = "SELECT COUNT(*) as totalCyber from question where question_category='Cybersecurity'";
     $result = mysqli_query($connection, $query);
     $value = mysqli_fetch_assoc($result);
     $totalCyber=$value['totalCyber'];

     $dataPointsOverall = array( 
      array("label"=>"Software Engineering", "y"=>$totalSoftware),
      array("label"=>"Computer Graphic", "y"=>$totalCG),
      array("label"=>"Computer System and Networking", "y"=>$totalNetwork),
      array("label"=>"Cybersecurity", "y"=>$totalCyber)
    )
  ?>
 

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST REPORT</title>
  <link rel="stylesheet"  href="pageStyle.css">

<script>
  window.onload = function() {
 
 
    var chart = new CanvasJS.Chart("chartContainer", {
	  animationEnabled: true,
	  title: {
		    text: "Total Number of Post Based on Category"
	  },
	  subtitles: [{
	  }],
	  data: [{
		    type: "pie",
		    yValueFormatString: "#,##0\"",
		    indexLabel: "{label} ({y})",
		    dataPoints: <?php echo json_encode($dataPointsOverall, JSON_NUMERIC_CHECK); ?>
	  }]
});
chart.render();
}
  
</script>

</head>

<body>
  <header>
    <div class="logo"><img src="../Asset/logoump.png" width="200" height="100"></div>
    <nav>
      <ul>
        <li><a href="USERMAINPAGE.php">HOMEPAGE</a></li>
        <li><a href="USERDISCUSSIONBOARD.php">DISCUSSION BOARD</a></li>
        <li><a href="USERMANAGEPROFILE.php">PROFILE</a></li>
        <li><a href="#">COMPLAINT</a></li>
        <li class="selected"><a href="POSTREPORT.php">REPORT</a></li>
      </ul>
    </nav>
    <button id="myBtn" class="icon">LOG OUT</button>
    <script>
            var btn = document.getElementById('myBtn');
            btn.addEventListener('click', function() {
            document.location.href = '../../Module1/interfaces/login.php';
            });
    </script>   
  </header>

  <br><br><button class="profile-button">OVERALL POST REPORT</button><br><br><br>

<div id="chartContainer"style="height: 370px; width: 50%; margin-left: 350px; border"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script><br><br>

<button class="kiri-button" onclick="location.href='POSTUSERREPORT.php';">USER REPORT</button>
<button class="kanan-button" onclick="location.href='POSTSPESIFICREPORT.php';">SPESIFIC REPORT</button>
<br> <br> <br> <br> <br> <br> <br>
  
  <footer>
    <p>&copy; 2023 My Website. All rights reserved.</p>
  </footer>
  
</body>
</html>