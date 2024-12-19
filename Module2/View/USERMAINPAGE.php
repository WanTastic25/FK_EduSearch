<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MAIN PAGE</title>
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
        <li class="selected"><a href="USERMAINPAGE.php">HOMEPAGE</a></li>
        <li><a href="USERDISCUSSIONBOARD.php">DISCUSSION BOARD</a></li>
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

  <br><br><button class="profile-button">WEBSITE INFORMATION</button><br><br>
  
  <button class="intro"><p>The objective of FK-EduSearch is to develop a comprehensive knowledge sharing system that enables users to post questions or seek guidance on their research or course-related topics from experts within their department or institution. 
    By utilizing this platform, users can tap into the collective knowledge and expertise of their academic community, fostering collaboration and facilitating effective learning.<br><br> 
    The scope of the application is limited to registered users within the Faculty of Computing at UMP, ensuring a focused and specialized environment tailored to the specific needs of the academic community in this field. 
    This restricted user base allows for meaningful interactions and knowledge exchange among individuals who share common interests and goals.<br><br>  The website incorporates various features to cater 
    to the specific needs of different user roles. Students and staff can post questions related to their research areas or courses, seek guidance, and receive feedback from assigned experts. 
    They also have the ability to provide ratings and feedback for the experts who assist them, establishing a system of recognition and accountability. Additionally, users can post complaints if any issues arise, ensuring prompt 
    resolution of their concerns.<br><br>  The experts, in turn, have responsibilities such as updating their research profiles, revising assigned posts, providing feedback or answers, and viewing ratings. 
    These tasks enable them to actively contribute to the knowledge sharing process and continuously improve their support to the academic community.<br><br>  Administrative privileges are essential for maintaining the integrity and 
    smooth functioning of FK-EduSearch. The admin has the authority to manage user profiles, filter posts, and ensure that all content posted is appropriate and relevant. 
    Furthermore, the admin handles the revision of complaints and Key Performance Indicator (KPI) reports, as well as managing updates to the experts' research profiles. 
    These responsibilities are crucial for maintaining a high standard of quality, 
    professionalism, and user satisfaction within the platform.<br><br>  To ensure a modern and user-friendly experience, FK-EduSearch is built using HTML5 and CSS3 technologies. 
    A suitable backend framework, relevant to the project requirements, is employed to handle server-side functionalities. 
    Additionally, the web application is hosted on a cloud platform, providing accessibility for both the admin and registered users. 
    The interface is optimized for mobile devices, allowing users to conveniently access and utilize the platform from any location.<br><br> 
    Overall, FK-EduSearch serves as a centralized hub for knowledge sharing and collaboration within the Faculty of Computing at UMP, empowering users to connect with experts, receive guidance, and actively participate in the academic community.
  </p></button>


  <br><br><br><button class="profile-button">LIST OF CURRENT EXPERT</button><br><br><br>

  <?php 

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'fk_edusearch_db');
    
    $sql = "SELECT userID, userType, userName, userAge, userSocialMedia, userAcademic from alluser where userType='expert'";
    $result = $connection-> query($sql);

    if($result-> num_rows > 0) {
        while($row = $result-> fetch_assoc()){
          ?>
          <table class="listtable">
          <tr> <!--Header-->
              <th>EXPERT ID</th>
              <th>LEVEL</th>
              <th>NAME</th>
              <th>AGE</th>
              <th>SOCIAL MEDIA</th>
              <th>ACADEMIC STATUS AND LEVEL</th>
          </tr>
          <tr>
              <td><?php echo $row['userID'] ?></td>
              <td><?php echo $row['userType'] ?></td>
              <td><?php echo $row['userName'] ?></td>
              <td><?php echo $row['userAge'] ?></td>
              <td><?php echo $row['userSocialMedia'] ?></td>
              <td><?php echo $row['userAcademic'] ?></td>
          </tr>
        </table>
        <br>
        <?php
        }
    }
  
  ?>

  <br> <br> <br> <br> <br> <br> <br>
  
  <footer>
    <p>&copy; 2023 My Website. All rights reserved.</p>
  </footer>
  
</body>
</html>