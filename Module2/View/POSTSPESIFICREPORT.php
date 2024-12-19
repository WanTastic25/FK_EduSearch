<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPESIFIC REPORT</title>
  <link rel="stylesheet"  href="pageStyle.css">

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

  <br><br><button class="profile-button">SPESIFIC POST REPORT</button><br><br><br>
  <form action="POSTSPESIFICREPORT1.php" method="POST" class="">
    <label for="fromDate" style="margin-left: 300px;">From : </label>
    <input type="date" id="fromDate" name="fromDate" class="search-input" required>
    <label for="toDate">To : </label>
    <input type="date" id="toDate" name="toDate" class="search-input" required>
    <input type="submit" name="search" value="Search" class="search-button">
  </form><br><br>

<button class="tengah-button" onclick="location.href='POSTREPORT.php';">RETURN</button>
<br> <br> <br> <br> <br> <br> <br>
  
  <footer>
    <p>&copy; 2023 My Website. All rights reserved.</p>
  </footer>
  
</body>
</html>