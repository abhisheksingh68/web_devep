<?php require_once __DIR__.'/function.php'; ?>

<html>
    <head>

    </head>
    <body>
        <form action="<?php echo url("registerHandler.php"); ?>" method="POST">
            Name: <input type="text" name="name" > <br>
            Email: <input type="email" name="email"> <br>
            <input type="submit" value="Submit" name="save">
        </form>
    </body>
</html>