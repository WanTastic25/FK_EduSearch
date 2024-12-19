<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAVED DATA</title>
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

  if(isset($_POST['simpan']))
  {
    $USERID = $_POST['userid'];
    $USERPASS = $_POST['userpass'];
    $USERNAME = $_POST['username'];
    $USERAGE = $_POST['userage'];
    $USERSOCMED = $_POST['usersocmed'];
    $USERACADEMIC = $_POST['useracademic'];
   

    $query = "UPDATE alluser set userID='$USERID', userPass='$USERPASS', userName='$USERNAME', userAge='$USERAGE', 
    userSocialMedia='$USERSOCMED', userAcademic='$USERACADEMIC' WHERE userID='$USERID'";

    $query_run = mysqli_query($connection,$query);

    if($query_run) 
	    {
        ?>
           <br><br><button class="warning-button">WARNING : USER PROFILE UPDATED !</button><br><br>
				<?php
		  }
		else 
	    {
        ?>
          <br><br><button class="warning-button">WARNING : USER PROFILE FAILED TO UPDATE !</button><br><br>
        <?php          
	    }
  }
  ?>

  <button class="tengah-button" onclick="location.href='USERMANAGEPROFILE.php';">RETURN</button>
  <br> <br> <br> <br> <br> <br> <br>
  
  <footer>
    <p>&copy; 2023 My Website. All rights reserved.</p>
  </footer>

  
  
</body>
</html>