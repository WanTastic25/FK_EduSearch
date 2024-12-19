<!DOCTYPE html>
<html>

<?php
    $userType = $_POST["userType"];
    $userID = $_POST["userID"];
    $userPass = $_POST["userPass"];
    $userName = $_POST["userName"];
    $userAcademic = $_POST["userAcademic"];

    $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
    mysqli_select_db($link, "fk_edusearch_db") or die(mysqli_error());

    if (!$link) {
        die('Could not connect: ' . mysqli_connect_error());
    }
    else if ($userType == "general"){
        $query = "insert into alluser values ('$userID', '$userPass', '$userType', '$userName', '', '', '$userAcademic')";
        mysqli_query($link, $query);
        echo "<script>alert ('Success!');</script>";
    }
    else if ($userType == "expert"){
        $query = "insert into alluser values ('$userID', '$userPass', '$userType', '$userName', '', '', '$userAcademic')";
        mysqli_query($link, $query);
        echo "<script>alert ('Success!');</script>";
    }
    else if ($userType == "admin"){
        $query = "insert into alluser values ('$userID', '$userPass', '$userType', '$userName', '', '', '$userAcademic')";
        mysqli_query($link, $query);
        echo "<script>alert ('Success!');</script>";
    }
    else {
        echo "Invalid";
    }
?>
    <script>
        window.location.replace("../interfaces/adminUserList.php");
    </script>
</html>