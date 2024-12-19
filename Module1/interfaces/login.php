<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <header>
        <link rel="stylesheet" href="..\stylesheet\loginStyle.css">
        <h1 class="title">UMP FK EduSearch</h1>
    </header>

    <body>
        <div class="formContainer">
        <form action='..\operations\loginOperations.php' method="post" onsubmit="check()">
            <select name="userType">
                <option value="">Choose User Type</option>
                <option value="general">Student or Staff</option>
                <option value="expert">Expert</option>
                <option value="admin">Admin</option>
            </select> <br>

            <input type="text" id="id" name="id" placeholder="Enter ID" required> <br>
            <input type="password" id="pass" name="pass" placeholder="Enter Pass" required> <br>
            <input type="submit">
        </form>
        </div>
    </body>
</html>

