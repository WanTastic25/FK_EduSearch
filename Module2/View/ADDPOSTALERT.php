<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADD DATA</title>
  <link rel="stylesheet"  href="pageStyle.css">

</head>
<body>
  <header>
    <div class="logo"><img src="../Asset/logoump.png" width="200" height="100"></div>
    <nav>
      <ul>
        <li><a href="USERMAINPAGE.php">HOMEPAGE</a></li>
        <li><a href="USERDISCUSSIONBOARD.php">DISCUSSION BOARD</a></li>
        <li class="selected"><a href="USERMANAGEPROFILE.php">PROFILE</a></li>
        <li><a href="#">COMPLAINT</a></li>
        <li><a href="POSTREPORT.php">REPORT</a></li>
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

  <?php

  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'fk_edusearch_db');

  if(isset($_POST['upload']))
  {
    $TITTLE = $_POST['post_tittle'];
    $QUESTION = $_POST['post_question'];
    $CATEGORY = $_POST['post_category'];
    $EXPERT = $_POST['post_expert'];
    $USERID = $_POST['post_user'];
    $POSTDATE = $_POST['post_date'];
    
    $query = "INSERT into question values ('', '$TITTLE', '$CATEGORY', '$QUESTION', '$EXPERT', '', 'ACCEPTED', '$USERID', '$POSTDATE')";

    $query_run = mysqli_query($connection,$query);

    if($query_run) 
	    {
        ?>
           <br><br><button class="warning-button">WARNING : POST UPLOADED !</button><br><br>
				<?php
		  }
		else 
	    {
        ?>
          <br><br><button class="warning-button">WARNING : POST FAIL TO UPLOAD !</button><br><br>
        <?php          
	    }
  }
  ?>

  <button class="tengah-button" onclick="location.href='USERDISCUSSIONBOARD.php';">RETURN</button>
  <br> <br> <br> <br> <br> <br> <br>
  
  <footer>
    <p>&copy; 2023 My Website. All rights reserved.</p>
  </footer>

  
  
</body>
</html>