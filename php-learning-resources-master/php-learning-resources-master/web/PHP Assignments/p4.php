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
            flex-direction: column;
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
            padding: 50px 25px;
            backdrop-filter: blur(30px);
            color: #111;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,200,.3);
            border-bottom: 2px solid #111;
        }

        main p{
            font-size: 15px;
            margin-bottom: 10px;
        }

        input[type="submit"]{
            height: 28px;
            width: 100px;
            border-radius: 3px;
            background: #111;
            border: none;
            color: #fff;
        }

        p{
            font-size: 14px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <main>
    <h2>Display Name</h2>
    <hr>
    <br>
    <form action="handle-p4.php" method="POST">
        <p>Enter the Name  :</p>
        <input type="text" name="name" id="name">
        <br><br>
        <input type="submit" name="submit" id="submit" value="Submit">
        <br>
    </form>
    </main>
    <center><p>Made by - <b>Deeproshan Kumar</b></p></center>
</body>
</html>