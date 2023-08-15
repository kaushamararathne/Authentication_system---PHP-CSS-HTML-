<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <div class="navbar">
            <div><h1>Kaushamararathne</h1>
                <h2>Authentication System</h2></div>
            
                <form action="include\register.inc.php" method="post">
                <a>Register</a><br>
                    <label for="userId">userId</label>
                    <input type="text" name="uId" placeholder="Enter Username" required><br>
                    <label for="userId">NIC</label>
                    <input type="text" name="NIC" placeholder="NIC Number" required>
                    <label for="userPw">userPw</label>
                    <input type="password" name="uPw" placeholder="Enter Password" required><br>
                    <button type="submit" name="register">Register</button><br>
                    <a href="login.php">login</a>
                    <a class="form_a" href="register.php">Register</a></form>
                </form>
           
        </div>
</body>
</html>