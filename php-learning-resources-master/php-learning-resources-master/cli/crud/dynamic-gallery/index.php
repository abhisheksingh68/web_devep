<?php
include_once __DIR__.'/connection/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Gallery</title>
    <style>
    *{
        font-family: sans-serif;
    }

    #gallery{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
    }

    #gallery img{
        max-width: 400px;
        box-shadow : 0 0 10px rgba(0,0,0,.5);
        margin: 15px 0;
    }

    </style>
</head>
<body>
    <h2>File Uploading</h2>
    <hr/>
    <br/>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select File : <input type="file" name="attachment"   required>
        <input type="submit"/>
    </form>

    <h2><center>Gallery</center></h2>
    <hr/>
    <br/>
    <div id="gallery">
        <?php 
        $sql = "SELECT * FROM gallery";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($fetch = mysqli_fetch_assoc($result)){
                // echo $fetch['image'];
            ?>
        <img src="uploads/<?php echo $fetch['image']; ?>">
        <?php
        }
    }
    ?>
    </div>
</body>
</html>