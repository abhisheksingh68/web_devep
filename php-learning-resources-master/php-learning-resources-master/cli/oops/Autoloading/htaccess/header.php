<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: sans-serif;
            }

            nav{
                display: flex;
                justify-content: space-between;
                align-items: center;
                background: tomato;
                padding: 0 50px;
            }

            nav h2{
                color: #fff;
            }

            nav ul{
                display: flex;
                list-style: none;
            }

            nav ul li{
                margin-right: 30px;
            }

            nav ul li a{
                text-decoration: none;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <nav>
            <div>
                <h2>Logo</h2>
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </body>
</html>