<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EDIT PROFILE</title>
  <link rel="stylesheet"  href="pageStyle.css">

</head>

<?php 
  session_start(); 
  $id = $_SESSION['userID'];
?>

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

  <br><br><button class="profile-button">EDIT PROFILE</button><br><br>

  <?php

  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'fk_edusearch_db');
  
    $query = "SELECT * FROM alluser where userID='$id' "; 

    $query_run = mysqli_query($connection,$query);

    while($row = mysqli_fetch_array($query_run))
      {
        ?> 
        <form action= "USERSAVEPROFILE.php" method="POST">
          <table class="listtable">
          <tr>
            <th>No</th>
            <th>DETAILS</th>
            <th>INFORMATION</th>
          </tr>
          <tr>
            <td>1</td>
            <td>User ID</td>
            <td><input type="text" name="userid" value="<?php echo $row['userID'] ?>"/> </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Password</td>
            <td><input type="text" name="userpass" value="<?php echo $row['userPass'] ?>"/> </td>
          </tr>
          <tr>
            <td>3</td>
            <td>User Name</td>
            <td><input type="text" name="username" value="<?php echo $row['userName'] ?>"/> </td>
          </tr>
          <tr>
            <td>4</td>
            <td>User Age</td>
            <td><input type="text" name="userage" value="<?php echo $row['userAge'] ?>"/> </td>
          </tr>
          <tr>
            <td>5</td>
            <td>Social Media</td>
            <td><input type="text" name="usersocmed" value="<?php echo $row['userSocialMedia'] ?>"/> </td>
          </tr>
          <tr>
            <td>6</td>
            <td>Academic Status</td>
            <td><input type="text" name="useracademic" value="<?php echo $row['userAcademic'] ?>"/> </td>
          </tr>
          </table><br><br><br>
          <input type="submit" name="simpan" value="SAVE" class="tengah-button">
        </form>
        <?php  
  
      }
  
?>

  <button class="tengah-button" onclick="location.href='USERMANAGEPROFILE.php';">RETURN</button>
  <br> <br> <br> <br> <br> <br> <br>
  
  <footer>
    <p>&copy; 2023 My Website. All rights reserved.</p>
  </footer>

  
  
</body>
</html>