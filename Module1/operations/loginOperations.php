<html>
    <?php
    session_start();
    
    $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
    mysqli_select_db($link, "fk_edusearch_db") or die(mysqli_error());

    $userType = $_POST['userType'];
    $userID = $_POST['id'];
    $userPass = $_POST['pass'];
    
    $_SESSION["userID"] = "$userID";

    $query = "select * from alluser where userType='$userType' and userID='$userID' and userPass='$userPass'";

    if($userType == 'general') {
        $rs = mysqli_query($link, $query);
        $verify = mysqli_fetch_array($rs);
        if ($verify['userID'] == $userID && $verify['userPass'] == $userPass) {header("Location: ..\..\Module2\View\USERDISCUSSIONBOARD.php");}
        else echo '<script>alert("Invalid")</script>';
    }
    elseif($userType == 'expert') {
        $rs = mysqli_query($link, $query);
        $verify = mysqli_fetch_array($rs);
        if ($verify['userID'] == $userID && $verify['userPass'] == $userPass) {header("Location: ..\..\Module3\something");}
        else echo '<script>alert("Invalid")</script>';
    }
    elseif($userType == 'admin') {
        $rs = mysqli_query($link, $query);
        $verify = mysqli_fetch_array($rs);
        if ($verify['userID'] == $userID && $verify['userPass'] == $userPass) {header("Location: ..\interfaces\adminUserList.php");}
        else echo '<script>alert("Invalid")</script>';
    }
    else {
        echo '<script>alert("Invalid")</script>';
    }
    ?>
    <script>history.go(-1)</script>
</html>
