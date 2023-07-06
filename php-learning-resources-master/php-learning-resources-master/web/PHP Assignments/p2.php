<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body{
            min-height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        input[type="text"]{
            height: 28px;
            width: 100%;
            padding: 0 10px;
            border-radius: 3px;
            outline: none;
            border: none;
            box-shadow: 0 2px 5px rgba(0,0,0,.5);
        }

        main{
            height: 350px;
            width: 300px;
            background: linear-gradient(blue,transparent);
            padding: 50px 25px;
            backdrop-filter: blur(30px);
            color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,200,.3);
            border-bottom: 2px solid blue;
        }

        main p{
            font-size: 15px;
            margin-bottom: 10px;
        }

        input[type="submit"]{
            height: 28px;
            width: 100px;
            border-radius: 3px;
            background: blue;
            border: none;
            color: #fff;
        }

    </style>
</head>
<body>
    <main>
    <h2>HTML FORM</h2>
    <hr>
    <br>
    <form action="handle-p2.php" method="POST">
        <p>Enter the Name :</p>
        <input type="text" name="name" id="name">
        <br><br>
        <p>Enter the  Email :</p>
        <input type="text" name="email" id="email">
        <br><br>
        <input type="submit" name="submit" id="submit" value="Submit">
    </form>
    </main>
</body>
</html>