<?php
$link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
mysqli_select_db($link, "fk_edusearch_db") or die(mysqli_error());

$id = $_GET['userID'];

$query = "delete from alluser where userID='$id'";
$result= mysqli_query($link, $query);

if($result){
    echo "<script>alert('Successful Delete')</script>";
}
else{
    echo "<script>alert('Failed Delete')</script>";
}

?>

<script>
    window.location.replace("../interfaces/adminUserList.php");
</script>