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
            
                <form action="include\login.inc.php" method="post">
                <a>login</a><br>
                    <label for="userId">userId</label>
                    <input type="text" name="uId" placeholder="Enter Username" required><br>
                    <label for="userPw">userPw</label>
                    <input type="password" name="uPw" placeholder="Enter Password" required><br>
                    <button type="submit" name="submit">login</button><br>
                    <a class="form_a" href="register.php">Register</a></form>
                </form>
           
        </div>
</body>
</html>