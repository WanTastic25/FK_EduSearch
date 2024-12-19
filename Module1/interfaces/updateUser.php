<?php
$link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
mysqli_select_db($link, "fk_edusearch_db") or die(mysqli_error());

$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $userID = $_POST['userID'];
  $userPass = $_POST['userPass'];
  $userType = $_POST['userType'];
  $userName = $_POST['userName'];
  $userAge = $_POST['userAge'];
  $userSocialMedia = $_POST['userSocialMedia'];
  $userAcademic = $_POST['userAcademic'];

  $sql = "update alluser set userID='$userID', userPass='$userPass',userType='$userType', userName='$userName', userAge='$userAge', userSocialMedia='$userSocialMedia', userAcademic='$userAcademic' WHERE userID='$id'";

  $result = mysqli_query($link, $sql);

  if ($result) {
    header("Location: adminUserList.php");
  } else {
    echo "Failed:" .mysqli_error($link);
  }
}
?>    
    
    <head>
        <link rel="stylesheet" href="..\stylesheet\updateUserStyle.css">
        <link rel="stylesheet" href="Asset\font-awesome-4.7.0\font-awesome-4.7.0\css\font-awesome.min.css">
        <?php include '../layout.php'?>
    </head>

    <body>

    <?php
    $sql = "select * from alluser where userID='$id' LIMIT 1";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="toolbarThing">
        <form action="" method="post">
            <label>User Type:</label>
            <select name="userType">
                <option value="<?php echo $row['userType'] ?>"> <?php echo $row['userType']?> </option>
                <option value="general">Staff or Student</option>
                <option value="expert">Expert</option>
                <option value="admin">Admin</option>
            </select>
            <label>User ID:</label>
            <input type="text" name="userID" value="<?php echo $row['userID'] ?>" required>
            <label>User Password:</label>
            <input type="text" name="userPass" value="<?php echo $row['userPass'] ?>" required>
            <label>User Name:</label>
            <input type="text" name="userName" value="<?php echo $row['userName'] ?>" required>
            <label>User Age:</label>
            <input type="text" name="userAge" value="<?php echo $row['userAge'] ?>" required>
            <label>User Social Media:</label>
            <input type="text" name="userSocialMedia" value="<?php echo $row['userSocialMedia'] ?>" required>
            <label>User Academics:</label>
            <input type="text" name="userAcademic" value="<?php echo $row['userAcademic'] ?>" required>
            <input type="submit" name="submit">
        </form>
    </div>

    <button class="back" onclick="location='adminUserList.php'">CANCEL</button>