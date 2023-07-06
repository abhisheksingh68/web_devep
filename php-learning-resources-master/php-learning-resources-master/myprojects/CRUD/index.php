<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisration</title>
    <style>
        *{
            box-sizing: border-box;
        }

        body{
            min-height: 100vh;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: #ddd;
            color: #333;
        }

        .btn{
            padding: 7px 15px;
            background: darkgreen;
            color: #fff;
            border-radius: 4px;
            text-decoration: none;
            position: fixed;
            top: 30px;
            right: 30px;
        }

        form{
            max-width: 400px;
            height: 540px;
        }

        form label, input{
            width: 100%;
        }

        form input{
            margin: 10px 0;
            padding: 8px 10px;
            border-radius: 4px;
            background: #fff;
            font-size: 15px;
            border: none;
            outline: none;
        }

        input[type="submit"]{
            background: red;
            height: 38px;
            color: #fff;
        }
    </style>
</head>
<body>
    <a href="read.php" class="btn">View Records</a>
    <form action="create.php" method="POST">
        <h2>REGISTER</h2>
        <hr>
        <br>
        <label>First Name</label>
        <input type="text" name="fname" id="" autocomplete="off" required>
        <label>Last Name</label>
        <input type="text" name="lname" id="" autocomplete="off" required>
        <label>Email</label>
        <input type="email" name="email" id="" autocomplete="off" required>
        <label>Create Password</label>
        <input type="password" name="password" id="" autocomplete="off" required>
        <label>Confirm Password</label>
        <input type="password" name="cpassword" id="" autocomplete="off" required>
        
        <input type="submit" value="REGISTER" name="register">
    </form>
</body>
</html>