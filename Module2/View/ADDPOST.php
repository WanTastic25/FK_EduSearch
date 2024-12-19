<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADD POST</title>
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
        <li class="selected"><a href="USERDISCUSSIONBOARD.php">DISCUSSION BOARD</a></li>
        <li><a href="USERMANAGEPROFILE.php">PROFILE</a></li>
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

  <br><br><button class="profile-button">ADD POST</button><br><br>
  <form action="ADDPOSTALERT.php" method="POST">
  <table class="listtable">
    <tr> <!--Header-->
        <th>TITTLE</th>    
        <th>QUESTION</th>
        <th>CATEGORY</th>
        <th>EXPERT YOU WANT TO ASSIGN</th>
        <th>QUESTION BY</th>
        <th>DATE</th>
    </tr>
    <tr>
        <td><input type="text" name="post_tittle" value="" required></td>
        <td><input type="text" name="post_question"  value="" required></td>
        <td><select id="category" name="post_category" required>
            <option value="Software Engineering">Software Engineering</option>
            <option value="Computer System and Networking">Computer System and Networking</option>
            <option value="Computer Graphic">Computer Graphic</option>
            <option value="Cybersecurity">Cybersecurity</option>
        </select></td>
        <td><input type="text" name="post_expert" value="" required></td>
        <td><input type="text" name="post_user" value="<?php echo $_SESSION['userID'] ?>"/> </td>
        <td><input type="date" name="post_date" value="" required></td>
    </tr>
  </table><br><br>
  <input type="submit" name="upload" value="ADD" class="tengah-button">
  </form><br>
  <button class="tengah-button" onclick="location.href='USERDISCUSSIONBOARD.php';">RETURN</button>
 
  <footer>
    <p>&copy; 2023 My Website. All rights reserved.</p>
  </footer>

  
  
</body>
</html>