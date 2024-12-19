<?php
$link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
mysqli_select_db($link, "fk_edusearch_db") or die(mysqli_error());

$query = "select COUNT(*) as totalGeneral from alluser where userType='general'";
$result = mysqli_query($link, $query);
$display = mysqli_fetch_assoc($result);

echo $display['totalGeneral'];

$query = "select COUNT(*) as totalExpert from alluser where userType='expert'";
$result = mysqli_query($link, $query);
$display = mysqli_fetch_assoc($result);

echo $display['totalExpert'];

$query = "select COUNT(*) as totalAdmin from alluser where userType='admin'";
$result = mysqli_query($link, $query);
$display = mysqli_fetch_assoc($result);

echo $display['totalAdmin'];
?>