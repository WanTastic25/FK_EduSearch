<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="..\Asset\font-awesome-4.7.0\font-awesome-4.7.0\css\font-awesome.min.css">
        <?php include '../layout.php'?>
        <link rel="stylesheet" href="..\stylesheet\userListStyle.css">
    </head>

    <header>
    </header>

    <body>
    <?php
    $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
    mysqli_select_db($link, "fk_edusearch_db") or die(mysqli_error());
    ?>
  
    <div class="toolbarThing">
        <h1>LIST OF USERS</h1>
    </div>

    <!--User List-->
    <div class="listBox">
    <table class="userList">
        <tr>
          <th>ID</th>
          <th>Password</th>
          <th>User Type</th>
          <th>Name</th>
          <th>Age</th>
          <th>Social Media</th>
          <th>Academic Status</th>
          <th>Operations</th>
        </tr>
        <?php
        $query = "SELECT * FROM `alluser`";
        $result = mysqli_query($link, $query);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["userID"] ?></td>
            <td><?php echo $row["userPass"] ?></td>
            <td><?php echo $row["userType"] ?></td>
            <td><?php echo $row["userName"] ?></td>
            <td><?php echo $row["userAge"] ?></td>
            <td><?php echo $row["userSocialMedia"] ?></td>
            <td><?php echo $row["userAcademic"] ?></td>
            <td class="operation">
                <a href="updateUser.php?id=<?php echo $row["userID"]?>" class="functionIcon"><i class="fa fa-pencil"></i></a>
                <a href="..\operations\delete.php?userID=<?php echo $row["userID"]?>" class="functionIcon"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
    </table>
    </div>  
  </body>

</html>