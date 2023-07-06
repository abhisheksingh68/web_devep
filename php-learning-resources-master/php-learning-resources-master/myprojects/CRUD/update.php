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
    <form action="updatehandler.php" method="POST">
        <h2>UPDATE DETAILS</h2>
        <?php

        include_once __DIR__.'/connection/dbconnect.php';

        $id = $_GET['id'];

        $sql = "SELECT * FROM register WHERE id = {$id};";

        $result = mysqli_query($conn, $sql) or die("Query unsuccessful...");

        if(mysqli_num_rows($result) > 0){
        foreach($result as $row){
        ?>
        <hr>
        <br>
        <label>First Name</label>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" id="">
        <input type="text" name="fname" value="<?php echo $row['fname']; ?>" id="" autocomplete="off" required>
        <label>Last Name</label>
        <input type="text" name="lname" value="<?php echo $row['lname']; ?>" id="" autocomplete="off" required>
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" id="" autocomplete="off" required>
        <label>Create Password</label>
        <input type="password" name="password" value="<?php echo $row['password']; ?>" id="" autocomplete="off" required>
        <label>Confirm Password</label>
        <input type="password" name="cpassword" value="<?php echo $row['cpassword']; ?>" id="" autocomplete="off" required>
        
        <input type="submit" value="UPDATE" name="update">
        <?php
            }
        }
        ?>
    </form>
</body>
</html>