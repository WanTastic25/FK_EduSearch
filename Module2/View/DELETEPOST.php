<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DELETE POST</title>
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

  <br><br><button class="profile-button">DELETE CREATED POST</button><br><br>
  
  <?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'fk_edusearch_db');
    
    $sql = "SELECT questionID, question_tittle, question_category, question_desc, question_expert, question_answer, question_status, question_userID from question 
    where question_userID='$id'";
    $result = $connection-> query($sql);

    if($result-> num_rows > 0) {
        while($row = $result-> fetch_assoc()){
          ?>
          <table class="listtable">
          <tr> <!--Header-->
              <th>POST ID</th>
              <th>TITTLE</th>
              <th>CATEGORY</th>
              <th>QUESTION</th>
              <th>EXPERT ASSIGNED</th>
              <th>ANSWER</th>
              <th>STATUS</th>
              <th>QUESTION BY</th>
          </tr>
          <tr>
              <td><?php echo $row['questionID'] ?></td>
              <td><?php echo $row['question_tittle'] ?></td>
              <td><?php echo $row['question_category'] ?></td>
              <td><?php echo $row['question_desc'] ?></td>
              <td><?php echo $row['question_expert'] ?></td>
              <td><?php echo $row['question_answer'] ?></td>
              <td><?php echo $row['question_status'] ?></td>
              <td><?php echo $row['question_userID'] ?></td>
          </tr>
        </table>
        <br><br>
        <?php
        }
    }
  
  ?>
  <!-- Search Form -->
  <form action="DELETEPOSTALERT.php" method="POST" class="search-form">
  <input type="text" id="questionID" name="questionID" class="search-input" placeholder="ENTER POST ID" required>
  <input type="submit" name="delete" value="DELETE" class="search-button">
  </form><br><br>
  <button class="tengah-button" onclick="location.href='USERDISCUSSIONBOARD.php';">RETURN</button>
  <br> <br> <br> <br> <br> <br> <br>
  
  <footer>
    <p>&copy; 2023 My Website. All rights reserved.</p>
  </footer>

  
  
</body>
</html>