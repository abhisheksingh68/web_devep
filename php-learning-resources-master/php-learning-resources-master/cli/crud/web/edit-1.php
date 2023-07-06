<?php 

require_once __DIR__.'/function.php';
include_once __DIR__.'/query-builder/query.php';

$id = get('id');
if(!empty($id)){
    $query = new Query();
    $record = $query->select('*')->table('emp')->where('id',$id)->first();
}
?>

<html>
    <head>

    </head>
    <body>
        <form action="<?php echo url("updateHandler.php");?>" method="POST">
            Name: <input type="text" name="name" value="<?php echo $record->name?>" > <br>
            <input type="hidden" name="id" value="<?php echo $record->id;?>">
            Email: <input type="email" name="email"value="<?php echo $record->email?>" > <br>
            <input type="submit" value="submit" name="save">
        </form>
    </body>
</html>