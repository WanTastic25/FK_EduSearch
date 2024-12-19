<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="..\stylesheet\createUserStyle.css">
        <?php include '../layout.php'?>
    </head>
    <body>
    <div class="toolbarThing">
        <form action="../operations/insertUser.php" method="post">
            <select name="userType">
                <option value="empty">User Type</option>
                <option value="general">Staff or Student</option>
                <option value="expert">Expert</option>
                <option value="admin">Admin</option>
            </select>
            <input type="text" placeholder="User ID" name="userID" required>
            <input type="text" placeholder="User Password" name="userPass" required>
            <input type="text" placeholder="User Full Name" name="userName" required>
            <input type="text" placeholder="User Academic Status" name="userAcademic" required>
            <input type="submit">
        </form>
    </div>
    </body>
    <button class="back" onclick="location='adminUserList.php'">Back</button>
</html>