<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="connector.php" method="post">
            User ID : <input type="text" name="userid" id=""> <br>
            Username : <input type="text" name="name" id=""> <br>
            User Category:
            <select name="usercat" id=""><br>
                <option value="U">User</option>
                <option value="A">Admin</option>
                <option value="S">Super Admin</option>
            </select><br>
            Password : <input type="password" name="password" id=""><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>